<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 25.07.2023
 * Time: 0:42
 */

namespace app\components;

use Yii;
use yii\helpers\ArrayHelper;
use app\models\User;
use app\models\UserPermissionsModel;
use app\models\UserRolesModel;
use app\components\BasicRoot;
use yii\web\ForbiddenHttpException;

class RootUser extends \yii\web\User
{
    public $_user;
    public $expire = 0;
    public static $permissions = [];

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();

        if (!$this->isGuest) {
            /** @var User $user */
            $this->_user = $this->identity;
            self::$permissions = ArrayHelper::map(
                UserPermissionsModel::find()
                    ->where([
                        "role_id" => $this->identity->role_id,
                    ])
                    ->all(),
                "route",
                "access"
            );
        } else {
            $this->logout();
        }
    }
    public function checkRole($user)
    {
        if (!$this->isGuest) {
            $user = $this->identity;
            if ($user->role_id !== User::ROLE_ADMIN) {
                throw new ForbiddenHttpException(
                    "Вы не авторизованы для выполнения этих действий!"
                );
            }
            self::$permissions = ArrayHelper::map(
                UserPermissionsModel::find()
                    ->where([
                        "role_id" => $user->role_id,
                    ])
                    ->all(),
                "route",
                "access"
            );
        } else {
            $this->logout();
        }
    }
    //ruxsatlarni ko'rib tekshiradi 
    public static function access($route = false, $exp = "or")
    {
        if (is_array($route)) {
            return self::evaluateAccessForArray($route, $exp);
        }

        $route = self::determineRoute($route);

        return self::hasPermission($route);
    }

    private static function evaluateAccessForArray($route, $exp)
    {
        $result = $exp === "and";

        foreach ($route as $r) {
            $result =
                $exp === "or"
                    ? $result || self::access($r)
                    : $result && self::access($r);
        }

        return $result;
    }

    private static function determineRoute($route)
    {
        if ($route === false) {
            return Yii::$app->controller->id .
                "/" .
                Yii::$app->controller->action->id;
        }

        return strpos($route, "/") === false
            ? Yii::$app->controller->id . "/" . $route
            : $route;
    }
    
    //true bo'lsa ruxsat aks holda 404
    private static function hasPermission($route)
    {
        $hasRootPermission =
            isset(self::$permissions["*"]) && self::$permissions["*"] == 1;
        $hasRoutePermission =
            isset(self::$permissions[$route]) &&
            self::$permissions[$route] == 1;

        return $hasRootPermission || $hasRoutePermission;
    }

    public function getUser()
    {
        return $this->_user;
    }
}
