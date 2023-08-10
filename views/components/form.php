<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

?>

<section data-bs-version="5.1" class="form1 hotelm4_form1 cid-tvCVYQ9BNF" id="form1-3h">
    <div class="container">
        <div class="row main-row justify-content-center">
            <div class="col-md-9 col-lg-6">
                <div class="form1">
                    <?php

                    $form = ActiveForm::begin()

                    ?>
                    <div class="dragArea row">
                        <div class="col-md-12">
                            <h3 class="mbr-fonts-style mbr-section-subtitle form-subtitle mbr-fonts-style align-center mbr-white display-5">
                                <strong>
                                    <?php echo Yii::t('common', 'Оставьте свои контакты и получите бесплатную консультацию'); ?>
                                </strong>
                            </h3>
                        </div>
                        <div class="col-md-12">
                            <h2 class="mbr-fonts-style mbr-section-title form-title mbr-fonts-style align-center mbr-white pb-5 display-7">
                                <?php echo Yii::t('common', 'Детальный расчет стоимости по вашему проекту.') ?>
                            </h2>
                        </div>
                        <div data-for="name" class="col-md-12 form-group mb-3 ">
                            <?= $form->field($model, 'name')->textInput(['autofocus' => false, 'placeholder' => Yii::t('common', 'Как вас зовут')])->label(false) ?>
                        </div>

                        <div data-for="phone" class="col-md-12 form-group mb-3 ">
                            <?= $form->field($model, 'phone_number')->textInput(['maxlength' => false])->widget(MaskedInput::class, ['mask' => '+\9\9\8 (99) 999 99 99'])->label(false); ?>
                        </div>

                        <div class="col-md-12 input-group-btn">
                            <?= Html::submitButton(Yii::t('common', 'Оставить заявку'), ['class' => 'btn btn-lg btn-form btn-black display-7', 'name' => 'contact-button']) ?>
                        </div>
                    </div>
                    <?php
                    ActiveForm::end();
                    ?>
                </div>
            </div>

            <div class="col-md-9 media-container-column items-column col-lg-6">
                <div class="row first-row only-first-row">
                    <div class="card col-12">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="<?php echo Yii::getAlias('@web') . '/' . 'resources/images/catalog5c62744fdf0f1-max-1248x1341.png' ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>