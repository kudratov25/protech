<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/** @var yii\web\View $this */
/** @var app\models\AddressesLinks $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="addresses-links-form">

    <?php $form = ActiveForm::begin(); ?>

    <? //= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) 
    ?>
    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => false])->widget(MaskedInput::class, ['mask' => '+\9\9\8 99 999 99 99']); ?>


    <?= $form->field($model, 'google_address')->textarea(['rows' => 6, 'placeholder' => '<iframe frameborder="0" style="border:0"' . "\n" . '.' .  "\n" . '.' . "\n" . '.' . "\n" . '</iframe>']) ?>

    <?= $form->field($model, 'address_name_ru')->textInput(['maxlength' => true, 'placeholder' => 'Ташкент ш. ул-15']) ?>
    
    <?= $form->field($model, 'address_name_uz')->textInput(['maxlength' => true, 'placeholder' => 'Toshkent shahri Navoi k.15']) ?>
    
    <?= $form->field($model, 'address_name_en')->textInput(['maxlength' => true, 'placeholder' => 'Tashkent city Nawai street.15']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => 'example@domain.zone']) ?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true, 'placeholder' => 'https://t.me/+998901234567']) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>