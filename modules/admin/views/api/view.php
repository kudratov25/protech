<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 06.05.2023
 * Time: 19:39
 */

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var $this yii\web\View */
/** @var $model app\modules\admin\models\Api */
/** @var $form yii\widgets\ActiveForm */

$this->title = $model->id;
$this->params["breadcrumbs"][] = ["label" => "Детали API", "url" => ["index"]];
$this->params["breadcrumbs"][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="api-view">

    <h1><?= Html::encode($this->title) ?></h1>

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

    <?= DetailView::widget([
        "model" => $model,
        "attributes" => [
            "id",
            "telegram_token",
            "telegram_chat_id",
            "bitrix_24_api",
            'widgetId',
        ],
    ]) ?>

</div>