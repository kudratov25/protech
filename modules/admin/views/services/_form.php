<?php

use kartik\file\FileInput;
use kartik\switchinput\SwitchInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Services $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="services-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'title_ru')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'title_uz')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'title_en')->textarea(['rows' => 1]) ?>


    <?= $form->field($model, 'image_main')->widget(FileInput::class, ['options' => ['accept' => 'image/*']]); ?>


    <?= $form->field($model, 'text_ru')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_uz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text_en')->textarea(['rows' => 6]) ?>



    <?= $form->field($model, 'text_full_ru')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>
    <?= $form->field($model, 'text_full_uz')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>
    <?= $form->field($model, 'text_full_en')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>


<br><br>

    <p class="text-red">if you want to add this data to in home carusel , wou have to fill the input fields and image also</p>
    <br>
    <?
    echo $form->field($model, 'isHome')->widget(SwitchInput::class, ['type' => SwitchInput::CHECKBOX]);
    ?>

    <?= $form->field($model, 'short_description_ru')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'short_description_uz')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'short_description_en')->textarea(['rows' => 3]) ?>


    <?= $form->field($model, 'image_bg')->widget(FileInput::class, ['options' => ['accept' => 'image/*']]); ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>