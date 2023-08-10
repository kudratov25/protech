<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 17:58
 */

namespace common\helpers;

use Yii;
use yii\helpers\BaseStringHelper;

/**
 * Class StringHelper
 * @package app\helpers
 */
class StringHelper extends BaseStringHelper
{
    const RANDOM_STRING_UPPER_CASE = 1;
    const RANDOM_STRING_LOWER_CASE = 2;
    const RANDOM_STRING_NUMBER = 4;
    const RANDOM_STRING_CHARS = 8;

    /**
     * @param $n
     * @param int $type
     * @return string|null
     */
    public static function randomString(int $n, int $type = 15): string
    {
        $chars = [];
        if (
            ($type & self::RANDOM_STRING_UPPER_CASE) ===
            self::RANDOM_STRING_UPPER_CASE
        ) {
            $chars[] = "QWERTYUIOPASDFGHJKLZXCVBNM";
        }

        if (
            ($type & self::RANDOM_STRING_LOWER_CASE) ===
            self::RANDOM_STRING_LOWER_CASE
        ) {
            $chars[] = "qwertyuiopasdfghjklzxcvbnm";
        }

        if (
            ($type & self::RANDOM_STRING_NUMBER) ===
            self::RANDOM_STRING_NUMBER
        ) {
            $chars[] = "0123456789";
        }

        if (($type & self::RANDOM_STRING_CHARS) === self::RANDOM_STRING_CHARS) {
            $chars[] = "-";
        }

        if (empty($chars)) {
            return self::randomString($n, $type);
        }

        shuffle($chars);
        $chars = implode("", $chars);

        $result = "";
        for ($i = 0; $i < $n; $i++) {
            $result .= $chars[random_int(0, strlen($chars) - 1)];
        }
        return $result;
    }
}
