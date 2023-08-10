<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 06.05.2023
 * Time: 23:45
 */

namespace app\widgets;

use yii\base\Widget;
use app\models\Visitor;

class VisitorCounterWidget extends Widget
{
    public function run()
    {
        $visitors = Visitor::find()
            ->where([">=", "created_at", time() - 86400])
            ->count();
        return $this->render("visitor-counter", ["visitors" => $visitors]);
    }
}
