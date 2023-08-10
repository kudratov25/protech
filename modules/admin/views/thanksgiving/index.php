<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 4:21
 */

use app\helpers\Html;
use yii\grid\GridView;

$this->title = "Благодарственные письма";
$this->params["breadcrumbs"][] = $this->title;
?>
<div class="thanksgiving-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a("Добавить", ["create"], ["class" => "btn btn-success"]) ?>
    </p>

   <?= GridView::widget([
       "dataProvider" => $dataProvider,
       "columns" => [
           ["class" => "yii\grid\SerialColumn"],
           "id",
           [
               "attribute" => "image",
               "format" => "html",
               "value" => function ($data) {
                   return Html::img(Yii::getAlias("@web") . $data->image, [
                       "width" => "100px",
                   ]);
               },
           ],
           ["class" => "yii\grid\ActionColumn"],
       ],
   ]) ?>
</div>