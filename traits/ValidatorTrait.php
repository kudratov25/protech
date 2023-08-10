<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.07.2023
 * Time: 23:07
 */

namespace app\traits;

use yii\base\Model;
use app\components\NotFoundHttpException;
use app\components\BaseActiveRecord;

/**
 *  ValidatorTrait
 */
trait ValidatorTrait
{
    /**
     * @param string $type
     * @param string $msg
     */
    protected function setMsg($type, $msg)
    {
        if (!isset($this->$type)) {
            $this->$type = $msg;
        }
    }

    //amalga oshmay qolsa
    public static function batchValidate(array $models)
    {
        foreach ($models as $model) {
            if (!$model->validate()) {
                throw new NotFoundHttpException(
                    "Bir yoki bir nechta modellar uchun validatsiya amalga oshmadi."
                );
            }
        }

        return true;
    }

    /**
     * So'rov turiga qarab tasdiqlaydi (Ajax yoki Post)
     */

    public static function validateByRequestType($action)
    {
        if (Yii::$app->request->isAjax) {
            return BaseAtiveRecord::validateAjax($action);
        }

        if (Yii::$app->request->isPost) {
            return BaseAtiveRecord::validatePost($action);
        }

        throw new NotFoundHttpException(
            "Faqat AJAX va POST so`rovlariga ruxsat beriladi."
        );
    }
}
