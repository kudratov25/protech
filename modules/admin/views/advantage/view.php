<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 23:08
 */

use app\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Advantage */

$this->title = $model->title_ru;
$this->params["breadcrumbs"][] = [
    "label" => "Преимущества",
    "url" => ["index"],
];
$this->params["breadcrumbs"][] = $this->title;
?>

<div class="advantage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        "model" => $model,
        "attributes" => [
            "id",
            "title_ru",
            "title_en",
            "title_uz",
            "description_ru",
            "description_en",
            "description_uz",
            [
                "attribute" => "image_path",
                "format" => "html",
                "value" => function ($model) {
                    return Html::img(
                        Yii::getAlias("@web/uploads/advantages") .
                            $model->image_path,
                        [
                            "width" => "60px",
                        ]
                    );
                },
            ],
        ],
    ]) ?>

    <p>
    <?= Html::a(
        "Обновить",
        ["update", "id" => $model->id],
        ["class" => "btn btn-primary"]
    ) ?>
    <?= Html::a(
        "Удалить",
        ["delete", "id" => $model->id],
        [
            "class" => "btn btn-danger",
            "data" => [
                "confirm" => "Вы уверены, что хотите удалить этот элемент?",
                "method" => "post",
            ],
        ]
    ) ?>
    </p>
</div>