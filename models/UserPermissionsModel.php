<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 14:42
 */

namespace app\models;

use app\components\BaseActiveRecord;

/**
 * UserPermissionsModel
 * @package app\models\User
 * @property $role_id
 * @property $route
 * @property $access
 * @property $created_at
 * @property $updated_at
 */
class UserPermissionsModel extends BaseActiveRecord
{
    public static function tableName()
    {
        return "user_permissions";
    }

    public static function updatePermission($id_role, $route, $access)
    {
        if ($id_role == 1) {
            return;
        }

        $model = self::find()
            ->where([
                "role_id" => $id_role,
                "route" => $route,
            ])
            ->one();

        if ($model) {
            $model->access = $access;
        } else {
            $model = new self();
            $model->role_id = $id_role;
            $model->route = $route;
            $model->access = $access;
        }

        $model->save(false);
    }
}
/*sql query //  yii migrate/create create_user_permissions_table bilan ishga tushirsangiz bo'ladi
CREATE TABLE `user_permissions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `role_id` int,
  `route` varchar(100),
  `access` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);
*/
