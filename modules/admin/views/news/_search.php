<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\SearchNews $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="news-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title_ru') ?>

    <?= $form->field($model, 'title_uz') ?>

    <?= $form->field($model, 'title_en') ?>

    <?= $form->field($model, 'banner_text_ru') ?>

    <?php // echo $form->field($model, 'banner_text_uz') ?>

    <?php // echo $form->field($model, 'banner_text_en') ?>

    <?php // echo $form->field($model, 'image_banner') ?>

    <?php // echo $form->field($model, 'full_text_ru') ?>

    <?php // echo $form->field($model, 'full_text_uz') ?>

    <?php // echo $form->field($model, 'full_text_en') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
