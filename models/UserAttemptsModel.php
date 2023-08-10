<?php

/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.02.2023
 * Time: 14:10
 */

namespace app\models;

use app\components\BaseActiveRecord;
use DateTime;
use app\helpers\Time;

/**
 * Class UserAttemptsModel
 * @package app\models\
 * @property $ip
 * @property $ip_text
 * @property $attempts
 * @property $datetime_attempts
 * @property $created_at
 * @property $updated_at
 */
class UserAttemptsModel extends BaseActiveRecord
{
    public static function tableName()
    {
        return "user_attempts";
    }

    /**
     * @param bool $clear
     * @return bool
     */
    public static function check($clear = false)
    {
        $long = sprintf("%u", ip2long($_SERVER["REMOTE_ADDR"]));

        $model = self::find()
            ->where([
                "ip" => $long,
            ])
            ->one();
        $now = date("Y-m-d H:i:s");
        if (!$model) {
            $model = new self();
            $model->ip = $long;
            $model->ip_text = $_SERVER["REMOTE_ADDR"];
            $model->attempts = 1;
            $model->created_at = $now;
            $model->save(false);

            return true;
        }

        if ($clear) {
            $model->attempts = 0;
            $model->save(false);
            return false;
        }

        if ($model->attempts >= 15) {
            if (strtotime($model->created_at) + 900 > time()) {
                return false;
            }

            $model->attempts = 1;
            $model->datetime_attempts = $now;
        } else {
            $model->attempts++;
        }

        $model->save(false);
        return true;
    }
}
