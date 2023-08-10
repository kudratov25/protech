<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 23:01
 */
use app\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

$this->title = "Создать";
?>
<h1><?= Html::encode($this->title) ?></h1>

<div class="advantage-form">

  <?php $form = ActiveForm::begin([
      "options" => ["enctype" => "multipart/form-data"],
  ]); ?>

<?= $form->field($model, "title_ru")->textInput(["maxlength" => true]) ?>
<?= $form->field($model, "title_en")->textInput(["maxlength" => true]) ?>
<?= $form->field($model, "title_uz")->textInput(["maxlength" => true]) ?>

<?= $form->field($model, "description_ru")->textarea(["rows" => 6]) ?>
<?= $form->field($model, "description_en")->textarea(["rows" => 6]) ?>
<?= $form->field($model, "description_uz")->textarea(["rows" => 6]) ?>

<?= $form
    ->field($model, "image")
    ->widget(FileInput::classname(), ["options" => ["accept" => "image/*"]]) ?>

<div class="form-group">
    <?= Html::submitButton("Создать", ["class" => "btn btn-success"]) ?>
</div>

<?php ActiveForm::end(); ?>
</div>