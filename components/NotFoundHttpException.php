<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 19:04
 */


namespace app\components;

/**
 * Class NotFoundHttpException
 * @package app\components
 */
class NotFoundHttpException extends \yii\web\NotFoundHttpException
{
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        if (!isset($message))
            $message = t("Эта страница не существует или страница была перемещена в другое место.");

        parent::__construct($message, $code, $previous);
    }
}