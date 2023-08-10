<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 15:01
 */

namespace app\models;

use app\components\BaseActiveRecord;

/**
 * Class UserRolesModel
 * @package app\models\User
 * @property $name
 * @property $info
 * @property $created_at
 * @property $updated_at
 */
class UserRolesModel extends BaseActiveRecord
{
    const SCENARIO_EDIT = "edit";

    public static function tableName()
    {
        return "user_roles";
    }
    public function scenarios()
    {
        return [
            self::SCENARIO_EDIT => ["name", "info"],
        ];
    }

    public function rules()
    {
        return [[["name", "info"], "required", "on" => [self::SCENARIO_EDIT]]];
    }
    public function attributeLabels()
    {
        return [
            "name" => t("Наименование"),
            "info" => t("Информация"),
            "created_at" => t("Дата создания"),
        ];
    }
}
/*sql query 
CREATE TABLE user_roles (
  id BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(200),
  info TEXT,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
*/
