<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 06.05.2023
 * Time: 19:41
 */

use app\helpers\Html;
use yii\widgets\ActiveForm;

/** @var $this yii\web\View */
/** @var $model app\modules\admin\models\Api */
/** @var $form yii\widgets\ActiveForm */
?>

<div class="api-form">

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

    <div class="form-group">
        <?= Html::submitButton("Сохранить", ["class" => "btn btn-success"]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>