<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 18:24
 */

use app\helpers\Html;
use yii\widgets\ActiveForm;

/** @var  $roles [] */
/** @var  $model \app\models\User */
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
        <?= $form->field($model, "role_id")->dropDownList($roles,["prompt" => " - "]); ?>
        <?= $form->field($model, "first_name")->textInput(); ?>
        <?= $form->field($model, "last_name")->textInput(); ?>
        <?= $form->field($model, "username")->textInput(); ?>
        <?= $form->field($model, "password")->passwordInput(); ?>
        <?= $form->field($model, "confirm")->passwordInput(); ?>
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

    <div class="card-footer bg-white">
        <?= Html::submitButton(t("Сохранить"), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

