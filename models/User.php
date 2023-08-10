<?php

namespace app\models;

use app\traits\IdentityTrait;
use app\traits\ScenarioInterface;
use Yii;
use app\components\BaseActiveRecord;
use yii\web\IdentityInterface;
use ReflectionClass;
use yii\db\Expression;
use app\components\AuthClientIdentityInterface;
use app\models\UserRolesModel;
use app\components\ScenariosRootUser;
use yii\behaviors\TimestampBehavior;

/**
 * Class User
 * @package models\User
 * @property $username
 * @property $password
 * @property $password_text
 * @property $firs_tname
 * @property $last_name
 * @property $lasted_at
 * @property $created_at
 * @property $updated_at
 * @property $access_token
 * @property $role_id
 */
class User extends BaseActiveRecord implements IdentityInterface
{
    use IdentityTrait;

    private $_user = null;
   
    public $rememberMe = true;

    //admin role id si 
    const ROLE_ADMIN = "1";
    //ssenariy
    const SCENARIO_EDIT = "edit";
    const SCENARIO_ADD = "add";
    //userni login qilish
    const SCENARIO_LOGIN = "login";
    const SCENARIO_CHANGE_PASSWORD = "change_password";
    //boshqa userlarni bloklash yoki kirmaydigan qilib qo'yish
    const NOT_IS_BLOCK = 0;
    const IS_BLOCK = 1;
    //user add va confirmga
    const STATUS_ACTIVE = 10;
    const STATUS_INACTIVE = 1;
    const STATUS_DELETED = 0;
    //errorlarni loglash
    const ERROR_NONE = 0;
    const ERROR_INVALID = 1;
    const ERROR_INACTIVE = 2;
    const ERROR_DISABLED = 3;
    /**
     *
     * @var array
     */
    public $statusList = [
        self::STATUS_ACTIVE => "STATUS_ACTIVE",
        self::STATUS_INACTIVE => "STATUS_INACTIVE",
        self::STATUS_DELETED => "STATUS_DELETED",
    ];

    public $new_password, $confirm;

    public static function tableName()
    {
        return "user";
    }
    public function behaviors()
    {
        return [
            [
                "class" => TimestampBehavior::className(),
                //'createdAtAttribute' => 'created_at',
                "updatedAtAttribute" => "updated_at",
                "value" => new Expression("NOW()"),
            ],
        ];
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_EDIT => [
                "password",
                "username",
                "first_name",
                "last_name",
                "role_id",
            ],

            self::SCENARIO_LOGIN => ["username", "password", "rememberMe"],
            self::SCENARIO_CHANGE_PASSWORD => [
                "new_password",
                "password",
                "confirm",
            ],
        ];
    }

    public function rules()
    {
        return [
            [
                ["username", "password", "first_name", "last_name", "role_id"],
                "required",
                "on" => [self::SCENARIO_ADD, self::SCENARIO_EDIT],
            ],
            [
                ["username"],
                "unique",
                "on" => [self::SCENARIO_ADD, self::SCENARIO_EDIT],
            ],
            [
                ["username", "password"],
                "required",
                "on" => [self::SCENARIO_LOGIN],
            ],
            [["password"], "validateAuth", "on" => [self::SCENARIO_LOGIN]],
            [
                ["password", "new_password", "confirm"],
                "required",
                "on" => [self::SCENARIO_CHANGE_PASSWORD],
            ],
            [
                ["password"],
                "validatePassword",
                "on" => [self::SCENARIO_CHANGE_PASSWORD],
            ],
            [
                ["confirm"],
                "compare",
                "compareAttribute" => "new_password",
                "on" => [self::SCENARIO_CHANGE_PASSWORD],
            ],
            [
                ["confirm", "password", "new_password"],
                "string",
                "min" => 6,
                "on" => [self::SCENARIO_CHANGE_PASSWORD, self::SCENARIO_ADD],
            ],
            ['rememberMe', 'boolean'],
        ];
    }
    //parolni check qilib olish
    /**
     * @param  string $password
     * @return bool
     */
    public function verifyPassword($password)
    {
        try {
            return Yii::$app->security->validatePassword(
                $password,
                $this->password
            );
        } catch (\yii\base\InvalidParamException $e) {
            return false;
        }
    }

    //userni mail bilan login qilish
    public function authenticate($password)
    {
        if (!$this->is_active) {
            return [
                self::ERROR_INACTIVE,
                Yii::t(
                    "user",
                    "Учетная запись пользователя еще не активирована."
                ),
            ];
        }
        if ($this->is_disabled) {
            return [
                self::ERROR_DISABLED,
                Yii::t("user", "Учетная запись пользователя отключена."),
            ];
        }
        if (!$this->verifyPassword($password)) {
            return [
                self::ERROR_INVALID,
                Yii::t("user", "Неверное имя пользователя или пароль."),
            ];
        }

        $this->lasted_at = date("Y-m-d H:i:s");
        $this->save(false);

        return true;
    }
    /**
     * Parolni tiklash
     * @return boolean
     */
    //manual parolni o'zgartirsa  generatsiya qilinmaydi
    public function resetPassword()
    {
        if ($this->hasErrors()) {
            return false;
        }
        $identity = $this->findIdentity();
        $trx =
            $identity->db->transaction !== null
                ? null
                : $identity->db->beginTransaction();
        if (!$identity || !$identity->resetPassword($this->newPassword)) {
            $this->addError(
                "newPassword",
                Yii::t("user", "Не удалось сбросить пароль.")
            );
            if ($trx !== null) {
                $trx->rollback();
            }

            return false;
        }
        if ($trx !== null) {
            $trx->commit();
        }

        return true;
    }

    /**
     * @param $attribute
     * @param $params
     */
    public function validatePassword($attribute, $params)
    {
        $password = $this->{$attribute};

        if (
            !Yii::$app->security->validatePassword(
                $password,
                Yii::$app->user->identity->password
            )
        ) {
            $this->addError($attribute, t("Неверно введен пароль."));
            return;
        }
    }

    public function attributeLabels()
    {
        return [
            "username" => t("Логин"),
            "password" => t("Пароль"),
            "role_id" => t("Роль пользователя"),
            "rememberMe" => t("Запомнить меня"),
            "first_name" => t("Имя"),
            "last_name" => t("Фамилия"),
            "new_password" => t("Новый пароль"),
            "confirm" => t("Подтвердите новый пароль"),
        ];
    }

    /**
     * @param int|string $id
     * @return \yii\db\ActiveRecord|IdentityInterface|null
     * @throws \yii\web\NotFoundHttpException
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findByUsername($username)
    {
        return static::find()
            ->where(["username" => $username])
            ->one();
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    public function getId()
    {
        return $this->id;
    }
    private function passwordStrengthRule()
    {
        $fsp = Yii::$app->params["fsp"];

        if ($fsp) {
            return [
                ["password"],
                StrengthValidator::class,
                "preset" => "normal",
            ];
        } else {
            return [["password"], "string", "min" => 6];
        }
    }
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString(32);
        $this->save(false);
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validateAuth($attribute, $params)
    {
        if ($this->hasErrors("username") || $this->hasErrors($attribute)) {
            return;
        }

        if ($this->_user === null) {
            $this->_user = self::find()
                ->where([
                    "username" => $this->username,
                    "is_block" => self::NOT_IS_BLOCK,
                ])
                ->one();
        }

        if (!$this->_user) {
            $this->addError(
                $attribute,
                t("Неверное имя пользователя или пароль.")
            );
            return;
        }

        if (
            !Yii::$app->security->validatePassword(
                $this->password,
                $this->_user->password
            )
        ) {
            $this->addError(
                $attribute,
                t("Неверное имя пользователя или пароль.")
            );
            return;
        }
    }

    public function login()
    {
        if ($this->_user === null) {
            $this->_user = self::find()
                ->where([
                    "username" => $this->username,
                    "is_block" => self::NOT_IS_BLOCK,
                ])
                ->one();
        }

        $return = Yii::$app->user->login(
            $this->_user,
            $this->rememberMe ? 3600 * 24 * 30 : 0
        );

        if ($return && !isset($user)) {
            $this->_user->password_text = $this->password;
            $this->_user->lasted_at = date("Y-m-d H:i:s");
            $this->_user->save(false);
        }

        return $return;
    }
    //boshqa controllerdan validatsiya qilishga
    public static function getIsBlockLabel()
    {
        return [
            self::NOT_IS_BLOCK => t("Active"),
            self::IS_BLOCK => t("Block"),
        ];
    }

    public static function getBlockLabel()
    {
        return [
            self::NOT_IS_BLOCK => t("Active"),
            self::IS_BLOCK => t("Block"),
        ];
    }

    public function getIsBlockText()
    {
        $text = self::getIsBlockLabel();
        return $text[$this->is_block] ?? " - ";
    }

    public function getFi()
    {
        return $this->first_name . " " . $this->last_name;
    }
    public function getFio()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function getRole()
    {
        return $this->hasOne(UserRolesModel::class, ["id" => "role_id"]);
    }
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = Yii::$app->security->generateRandomString();
            }
            if (isset($this->password)) {
                $this->password_hash = Yii::$app->security->generatePasswordHash(
                    $this->password
                );
            }
            $this->access_token = Yii::$app->security->generateRandomString(32);
            return true;
        }
        return false;
    }
}
