<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 16:12
 */

namespace app\helpers;

use Yii;
use yii\base\Exception;
use app\helpers\Html;

class Database
{
    public static function transaction($onCommit, $onError = null)
    {
        $trans = Yii::$app->db->beginTransaction();
        try {
            $onCommit();
            $trans->commit();
        } catch (Exception $e) {
            if (isset($onError)) {
                call_user_func($onError, $e);
            } else {
                Html::alertError($e->getMessage());
            }
        }
    }
}
