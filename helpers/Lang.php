<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 19:40
 */

namespace app\helpers;
use Yii;

class Lang
{
    const FIELD_LANG_SEPARATOR = "_";

    public static function each()
    {
        return LANGUAGES;
    }

    public static function fields($names)
    {
        if (!is_array($names)) {
            $names = [$names];
        }

        $result = [];

        foreach ($names as $name) {
            foreach (self::prefixEach() as $prefix) {
                $result[] = self::field($name, $prefix);
            }
        }

        return $result;
    }

    public static function field($name, $prefix = false)
    {
        if ($prefix === false) {
            $prefix = Yii::$app->language;
        }
        return $name . self::FIELD_LANG_SEPARATOR . $prefix;
    }

    public static function prefixEach()
    {
        foreach (self::each() as $prefix => $_) {
            yield $prefix;
        }
    }

    public static function prefixExists($prefix)
    {
        $language = LANGUAGES;
        if (isset($language[$prefix])) {
            return array_key_exists($prefix, $language);
        }

        return false;
    }

    public static function setCurrent($url = null)
    {
        if (self::prefixExists($url)) {
            Yii::$app->language = $url;
        } else {
            Yii::$app->language = DEFAULT_LANGUAGE;
        }
    }
}
