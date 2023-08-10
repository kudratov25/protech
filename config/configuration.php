<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.02.2022
 * Time: 01:29
 */

namespace {
    /**
     * O'zgaruvchini print_r/var_dump qilib chiqarish.
     * Bu funksiya buferni avtomatik tozalaydi.
     *
     * @param $variable o'zgaruvchi
     * @param bool $pre <pre> teginishi chiqarish yoki chiqarmaslik
     * @param bool $dump - print_r yoki var_dump
     */
    function print_variable($variable, $pre = true, $dump = false)
    {
        if ($pre) {
            echo "<pre>";
        }

        if ($dump) {
            var_dump($variable);
        } else {
            print_r($variable);
        }

        if (ob_get_level() > 0) {
            ob_end_flush();
        }

        return;
    }

    /**
     * Yii:t funksiyasining soddalashtirilgan varianti.
     *
     * @see Yii::t()
     *
     * @param $text
     * @param array $params
     * @param null $lang
     * @return string
     */
    function t($text, $params = [], $lang = null)
    {
        return Yii::t("app", $text, $params, $lang);
    }

    function print_http_error($code = 404, $text = "Not found")
    {
        while (ob_get_level()) {
            ob_get_clean();
        }

        $code = (int) $code;
        if ($code < 100 || $code >= 600) {
            $code = 500; // ichki server xatosi
            $text = "Internal Server Error";
        }

        $text = trim($text);
        if (empty($text)) {
            $text = "Unknown Error"; //noma'lum xato
        }

        header("Content-type: text/plain");
        header("HTTP/1.1 $code $text");
        echo $text;
        exit();
    }
}
