<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 31.07.2023
 * Time: 0:35
 */

namespace app\models;

use app\components\BaseActiveRecord;

//bu model shart emas, API ga o'tqazildi
class JivoModel extends BaseActiveRecord
{
    const SCENARIO_UPDATE = "update";

    public static function tableName()
    {
        return "jivo";
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_UPDATE] = ["widgetId"];
        return $scenarios;
    }

    public function rules()
    {
        return [[["widgetId"], "required"], [["widgetId"], "string"]];
    }
}
