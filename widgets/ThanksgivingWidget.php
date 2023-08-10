<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 4:45
 */

namespace app\widgets;

use yii\base\Widget;
use app\models\Thanksgiving;

class ThanksgivingWidget extends Widget
{
    public function run()
    {
        $thanksgivingImages = Thanksgiving::find()->all();
        return $this->render("thanksgiving", [
            "thanksgivingImages" => $thanksgivingImages,
        ]);
    }
}
