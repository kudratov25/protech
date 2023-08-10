<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;

$this->title = "Создать проект";
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



    <?= $form->field($model, "uploadFiles[]")->widget(FileInput::class, [
        "options" => ["multiple" => true, "accept" => "image/*"],
        // "pluginOptions" => [
        //     "previewFileType" => "any",
        //     "uploadUrl" => \yii\helpers\Url::to(["/projects/create"]),
        //     "showUpload" => false,
        // ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton("Create", ["class" => "btn btn-success"]) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

</div>