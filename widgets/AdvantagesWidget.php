<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 22:34
 */

namespace app\widgets;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use Yii;
use app\models\Advantage;

class AdvantagesWidget extends Widget
{
    public $advantages;
    public $icons;

    public function init()
    {
        parent::init();
        //modeldagi Наши преимущества lar
        $this->advantages = Advantage::find()->all();
    }

    public function run()
    {
        //Наши преимущества ni view dan chaqirib olamiz
        return $this->render("advantages", [
            "advantages" => $this->advantages,
        ]);
    }
}
