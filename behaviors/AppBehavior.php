<?php

namespace app\behaviors;


use yii\base\Application;
use yii\base\Behavior;
use Yii;

/**
 * Class AppBehavior
 * @package app\behaviors
 */
class AppBehavior extends Behavior
{
    public function events()
    {
        return [
            Application::EVENT_BEFORE_REQUEST => "beforeRequest",
        ];
    }

    public function beforeRequest() {
        $lang = Yii::$app->request->get("lang");
        if($lang && array_key_exists($lang, $GLOBALS['LANGUAGES']))
        {
            Yii::$app->session["lang"] = $lang;
        }

        if (!array_key_exists($lang, $GLOBALS['LANGUAGES'])) {
            if(isset(Yii::$app->session["lang"]))
                $lang = Yii::$app->session["lang"];
            else
                $lang = DEFAULT_LANGUAGE;
        }

        Yii::$app->language = $lang;
    }
}