<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.02.2023
 * Time: 00:20
 */

namespace app\models;

use app\components\BaseActiveRecord;
use Yii;
use app\models\User;
use app\models\UserIdentity;
use app\helpers\MobileDetectHelper;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * Class UserLoginsLogModel
 * @package app\models
 * @property $user_id
 * @property $ip_text
 * @property $user_agent
 * @property $created_at
 * @property $updated_at
 */
//Userni kirgan vaqti va sessiyasini loglash
class UserLoginsLogModel extends BaseActiveRecord
{
    public static function tableName()
    {
        return "user_logs";
    }

    public static function insertLog()
    {
        $count = self::find()
            ->where(["user_id" => Yii::$app->user->identity->id])
            ->count();
        if ($count > 15) {
            $_model = self::find()
                ->where([
                    "user_id" => Yii::$app->user->identity->id,
                ])
                ->orderBy("id ASC")
                ->one();

            if ($_model) {
                $_model->delete();
            }
        }

        $model = new self();
        $model->user_id = Yii::$app->user->identity->id;
        $model->ip_text = $_SERVER["REMOTE_ADDR"];
        $model->user_agent = isset($_SERVER["HTTP_USER_AGENT"])
            ? $_SERVER["HTTP_USER_AGENT"]
            : "-";
        $model->created_at = date("Y-m-d H:i:s");
        $model->updated_at = date("Y-m-d H:i:s");
        $model->save(false);
    }
}
