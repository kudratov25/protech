<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 22:34
 */
 
namespace app\widgets;

use yii\base\Widget;
use app\models\Clients;

class OurClientWidget extends Widget
{
    public function run()
    {
        $clients = Clients::find()->all();
        return $this->render('our_clients', ['clients' => $clients]);
    }
}