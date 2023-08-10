<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 24.07.2023
 * Time: 22:59
 */

namespace app\components;

/**
 * Class AccessControl
 * @package app\components
 */
class AccessControl extends \yii\filters\AccessControl
{
    public $rules = [];
    public function init()
    {
        parent::init();
    }

    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }
}
