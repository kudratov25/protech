<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 06.05.2023
 * Time: 23:54
 */

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * Class Visitor
 * @property $id
 * @property $created_at
 */

//bu modeldan faqat kunlik visitorlar print qilinadi, oylik, yillik kerak bo'lsa boshqa model yozish kerak. yoki yandex metrika ishlatsa bo'ladi!
class Visitor extends ActiveRecord
{
    public static function tableName()
    {
        return "{{%visitor}}";
    }

    public static function getVisitorsLast24Hours()
    {
        $last24Hours = time() - 24 * 60 * 60;
        return static::find()
            ->where([">", "created_at", $last24Hours])
            ->count();
    }
}
