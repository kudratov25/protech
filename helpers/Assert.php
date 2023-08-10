<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.02.2023
 * Time: 00:54
 */

namespace app\helpers;


use app\components\NotFoundHttpException;

class Assert
{
    /**
     * Int ga tekshiradi. Agar int bo'lmasa 404
     *
     * @param $value
     * @throws NotFoundHttpException
     */
    public static function isInteger($value)
    {
        if (!FilterVariable::isInteger($value))
            throw new NotFoundHttpException();
    }

    /**
     * Uint ga tekshiradi. Agar uint bo'lmasa 404
     *
     * @param $value
     * @throws NotFoundHttpException
     */
    public static function isUnsignedInteger($value)
    {
        if (is_array($value)) {
            foreach ($value as $item) {
                if (!FilterVariable::isUnsignedInteger($item))
                    throw new NotFoundHttpException();
            }
        } else {
            if (!FilterVariable::isUnsignedInteger($value))
                throw new NotFoundHttpException();
        }
    }
}