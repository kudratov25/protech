<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\MissionText $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mission-text-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'small_title_ru')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'small_title_uz')->textarea(['rows' => 2]) ?>

    <?= $form->field($model, 'small_title_en')->textarea(['rows' => 2]) ?>
    <br><br>
    <br><br>

    <?= $form->field($model, 'title_1_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_1_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_1_en')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'text1_ru')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'text1_uz')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'text1_en')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>


    <?= $form->field($model, 'image1')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>



    <br><br>
    <br><br>

    <?= $form->field($model, 'title_2_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_2_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_2_en')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'text2_ru')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'text2_uz')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'text2_en')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>


    <?= $form->field($model, 'image2')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>

    <br><br>
    <br><br>

    <?= $form->field($model, 'title_3_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_3_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_3_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text3_ru')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'text3_uz')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'text3_en')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>


    <?= $form->field($model, 'image3')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>