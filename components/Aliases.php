<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.07.2023
 * Time: 23:29
 */

namespace app\components;

use yii\base\Component;
use Yii;

class Aliases extends Component
{
    public function init()
    {
        Yii::setAlias("@webroot", dirname(dirname(__DIR__)) . "/web");
        Yii::setAlias("@uploads", Yii::getAlias("@webroot") . "/uploads/");
    }
}
