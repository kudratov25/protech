<?php

namespace app\widgets;

use app\models\Application;
use app\models\Form;
use Yii;
use yii\base\Widget;

class FormWidget extends Widget
{
    public function run()
    {

        $model = new Application();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return Yii::$app->getResponse()->redirect(['/site/thanks'])->send();
        } else {
            return $this->render('../../views/components/form', ["model" => $model]);
        }
    }
}
