<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 30.04.2023
 * Time: 18:41
 */

namespace app\components;

use Yii;
use app\components\BasicRoot;

class ScenariosRootUser extends BasicRoot
{
    const LOGIN = "login";
    const USER_CREATION = "userCreation";
    const ADMIN_CREATION = "adminCreation";
    const USER_EDITING = "userEditing";
    const PERMISSION_ADD = "permissionAdd";
    const PERMISSION_NEW = "permissionNew";
    const PERMISSION_DELETE = "permissionDelete";
    const ROLE_ADD = "roleAdd";
    const ROLE_NEW = "roleNew";
    const ROLE_DELETE = "roleDelete";

    public static function getConstants()
    {
        $reflectionClass = new \ReflectionClass(__CLASS__);
        return $reflectionClass->getConstants();
    }
}
