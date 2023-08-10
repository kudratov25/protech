<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 22:41
 */

namespace app\widgets;

use yii\base\Widget;
use app\models\Certificates;

class CertificateWidget extends Widget
{
    public function run()
    {
        $certificates = Certificates::find()->all();
        return $this->render("certificates", ["certificates" => $certificates]);
    }
}
