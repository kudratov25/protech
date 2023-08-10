<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 16:42
 */

namespace app\helpers;
use Yii;

class Html extends \yii\helpers\Html
{
    const ALERT_TYPE_SUCCESS = "success";
    const ALERT_TYPE_ERROR = "danger";
    const ALERT_TYPE_WARNING = "warning";
    const ALERT_TYPE_INFO = "info";

    public static function getFlashMessages()
    {
        $arr = Yii::$app->session->getAllFlashes();
        $msgs = "";

        foreach ($arr as $ftype => $msg) {
            list($type) = explode("-", $ftype);
            list($messages, $closeButton) = explode("-", $msg);

            $msgs .= "<div class='alert alert-{$type} alert-dismissible' role='alert'>$messages
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>";
        }

        return $msgs;
    }

    public static function alertSuccess($message, $closeButton = true)
    {
        static::alert($message, static::ALERT_TYPE_SUCCESS, $closeButton);
    }

    public static function alertError($message, $closeButton = true)
    {
        static::alert($message, static::ALERT_TYPE_ERROR, $closeButton);
    }

    public static function alertWarning($message, $closeButton = true)
    {
        static::alert($message, static::ALERT_TYPE_WARNING, $closeButton);
    }

    public static function alertInfo($message, $closeButton = true)
    {
        static::alert($message, static::ALERT_TYPE_INFO, $closeButton);
    }

    public static $flashCounter = 1;

    private static function alert($message, $type, $closeButton = true)
    {
        Yii::$app->session->setFlash(
            $type . " - " . self::$flashCounter,
            $message . " - " . $closeButton
        );
        self::$flashCounter++;
    }

    public static function action($title, $route, $params = [], $icon = null)
    {
        if (!$icon) {
            static $icons = [
                "update" => "fa-pencil",
                "delete" => "fa-times",
            ];

            $arr = explode("/", $route[0]);
            $actions = explode("-", array_shift($arr));

            foreach ($actions as $action) {
                if (array_key_exists($action, $icons)) {
                    $icon = Html::tag("i", "", [
                        "class" => "fa " . $icons[$action],
                        "aria-hidden" => true,
                    ]);
                    break;
                }
            }
        }

        return self::tag("div", self::a($icon . $title, $route, $params));
    }

    public static function alertTransactionException($e)
    {
        self::alertError(
            t(
                "Во время обработки запроса произошла ошибка. Пожалуйста, попробуйте ещё раз позже."
            )
        );
    }

    public static function nf($number)
    {
        $v = number_format($number, 3, ".", " ");
        $v = rtrim(trim($v, "0"), ".");
        if (!$v) {
            return 0;
        }
        if ($v[0] == ".") {
            $v = "0" . $v;
        }

        return $v;
    }

    /**
     * @param int $n
     * @param bool $number_only
     * @return string
     */
    public static function generationCode($n = 32, $number_only = false)
    {
        $type =
            StringHelper::RANDOM_STRING_LOWER_CASE |
            StringHelper::RANDOM_STRING_CHARS |
            StringHelper::RANDOM_STRING_NUMBER;
        if ($number_only) {
            $type = StringHelper::RANDOM_STRING_NUMBER;
        }

        return StringHelper::randomString($n, $type);
    }
}
