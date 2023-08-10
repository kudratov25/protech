<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 21.04.2023
 * Time: 18:10
 */

namespace app\traits;

use yii\web\IdentityInterface;

trait IdentityTrait
{
    /**
     * @param string|int $id
     * @return IdentityInterface|null
     */
    public static function findIdentity($id)
    {
        return static::find()
            ->where(["id" => $id])
            ->one();
    }

    public static function findByUsername($username)
    {
        return static::find()
            ->where(["username" => $username])
            ->one();
    }

    /**
     * @param mixed $token
     * @param mixed $type
     * @return IdentityInterface|null
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * @return string|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     * @see validateAuthKey()
     */
    public function getAuthKey()
    {
        return null;
    }

    /**
     * @param string $authKey
     * @return bool
     * @see getAuthKey()
     */
    public function validateAuthKey($authKey)
    {
        return false;
    }
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword(
            $password,
            $this->password_hash
        );
    }

    /**
     * @param  string $password
     *
     * @throws \yii\base\Exception
     * @throws \yii\base\InvalidConfigException
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash(
            $password
        );
    }
}
