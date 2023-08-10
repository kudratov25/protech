<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 06.05.2023
 * Time: 19:29
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var $this yii\web\View */
/** @var $model app\modules\admin\models\Api */
/** @var $form yii\widgets\ActiveForm */

$this->title = "Обновить сведения об API: " . $model->id;
$this->params["breadcrumbs"][] = ["label" => "Детали API", "url" => ["index"]];
$this->params["breadcrumbs"][] = [
    "label" => $model->id,
    "url" => ["view", "id" => $model->id],
];
$this->params["breadcrumbs"][] = "Обновить";
?>
<h1><?= Html::encode($this->title) ?></h1>
<?php $form = ActiveForm::begin(); ?>
    <?= $form
        ->field($model, "telegram_token")
        ->textInput(["maxlength" => true]) ?>
    <?= $form
        ->field($model, "telegram_chat_id")
        ->textInput(["maxlength" => true]) ?>
    <?= $form
        ->field($model, "bitrix_24_api")
        ->textInput(["maxlength" => true]) ?>
           <?= $form
        ->field($model, "widgetId")
        ->textInput(["maxlength" => true]) ?>
    <div class="form-group">
        <?= Html::submitButton("Сохранить", ["class" => "btn btn-success"]) ?>
        <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>
        <?php if (Yii::$app->session->hasFlash('error')): ?>
            <div class="alert alert-danger" role="alert">
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif; ?>
    </div>
<?php ActiveForm::end(); ?>
