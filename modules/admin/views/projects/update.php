<?php

use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Projects */
/* @var $form yii\widgets\ActiveForm */

$this->title = "Update Project: " . $model->id;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="project-form">
    <?php $form = ActiveForm::begin([
        "options" => ["enctype" => "multipart/form-data"],
    ]); ?>

    <?= $form->field($model, "title_ru")->textInput(["maxlength" => true]) ?>
    <?= $form->field($model, "title_en")->textInput(["maxlength" => true]) ?>
    <?= $form->field($model, "title_uz")->textInput(["maxlength" => true]) ?>
    
    <?= $form->field($model, 'main_image')->widget(FileInput::class, [
        'options' => [
            'accept' => 'image/*'
        ],
    ]); ?>
    
    <?= $form->field($model, 'description_ru')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'description_uz')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'description_en')->widget(CKEditor::class, [
        'editorOptions' => ElFinder::ckeditorOptions('elfinder', [/* Some CKEditor Options */]),
    ]); ?>

    
   

    <?= $form->field($model, 'uploadFiles[]')->widget(FileInput::class, [
        'options' => ['multiple' => true],
        'pluginOptions' => [
            'showUpload' => true,
            'browseLabel' => 'Select Images',
            'allowedFileExtensions' => ['jpg', 'jpeg', 'png', 'gif'],
            'dropZoneEnabled' => true,
        ],
    ]); ?>



    <div class="form-group">
        <?= Html::submitButton("Обновлять", ["class" => "btn btn-primary"]) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>