<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.02.2023
 * Time: 01:48
 */

namespace app\helpers;


class FilterVariable
{
    /**
     * int bo'lsa true aks holda false
     *
     * @param $value
     * @return bool
     */
    public static function isInteger($value)
    {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }

    /**
     * uint bo'lsa true aks holda false
     *
     * @param $value
     * @return bool
     */
    public static function isUnsignedInteger($value)
    {
        return self::isInteger($value) && $value >= 0;
    }
}