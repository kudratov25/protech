<?php

/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.02.2023
 * Time: 18:52
 */


use app\helpers\Html;
use yii\widgets\ActiveForm;


/** @var  \app\models\User $model */

$this->title = t("Сменить пароль");
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card mb-4">
    <?php $form = ActiveForm::begin(); ?>
    <div class="card-header bg-white font-weight-bold">
        <?= Html::encode($this->title) ?>
    </div>
    <div class="card-body">
        <?= $form->errorSummary($model) ?>
        <div class="col-md-9">
            <?= $form->field($model, "password")->passwordInput(); ?>
            <?= $form->field($model, "new_password")->passwordInput(); ?>
            <?= $form->field($model, "confirm")->passwordInput(); ?>
        </div>
    </div>
    <div class="card-footer bg-white">
        <div class="col-md-9">
            <?= Html::submitButton(t("Сменить"), ['class' => 'btn btn-success']) ?>
        </div>

        <?php
        // if (Yii::$app->session->hasFlash('success')): 
        ?>
        <!-- <div class="alert alert-success" role="alert"> -->
        <?php //echo Yii::$app->session->getFlash('success') 
        ?>
        <!-- </div> -->
        <?php
        // endif;
        ?>
        <?php // if (Yii::$app->session->hasFlash('error')): 
        ?>
        <!-- <div class="alert alert-danger" role="alert"> -->
        <?php //echo Yii::$app->session->getFlash('error') 
        ?>
        <!-- </div> -->
        <?php // endif; 
        ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>