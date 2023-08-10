<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 23:04
 */

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = "Наши преимущества";
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a("Добавить новый", ["add"], ["class" => "btn btn-success"]) ?>
</p>

<?= GridView::widget([
    "dataProvider" => $dataProvider,
    "columns" => [
        "title_ru",
        "title_en",
        "title_uz",
        "description_ru",
        "description_en",
        "description_uz",
        [
            "attribute" => "image_path",
            "format" => "raw",
            "label" => "Image",
            "value" => function ($data) {
                $imgPath = Yii::getAlias("@webroot") . "/" . $data->image_path;

                if (!empty($data->image_path) && file_exists($imgPath)) {
                    return Html::img(Url::to("@web/" . $data->image_path), [
                        "width" => "60px",
                    ]);
                } else {
                    return null;
                }
            },
        ],
        ["class" => "yii\grid\ActionColumn"],
    ],
]) ?>
