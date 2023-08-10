<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 29.04.2023
 * Time: 14:13
 */

use app\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = $model->isNewRecord ? t("Добавить") : t("Редактировать");
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="card mb-4">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-header bg-white font-weight-bold">
        <?= $model->isNewRecord ? t("Добавить новый") : t('Редактировать'); ?>
    </div>
    <div class="card-body">
        <?= $form->errorSummary($model) ?>
        <?= $form->field($model, 'name')->textInput() ?>
        <?= $form->field($model, 'info')->textarea() ?>
    </div>

    <div class="card-footer bg-white">
        <?= Html::submitButton(t("Сохранить"), ['class' => 'btn btn-success']) ?>
    </div>
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

    <?php ActiveForm::end(); ?>
</div>
