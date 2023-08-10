<?php

/** @var $this \yii\web\View */
/** @var $content string */
use app\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "Login";
?>
<div class="login-box">
    <div class="login-logo">
        <a href="<?= Yii::$app->homeUrl ?>"><b>Protech</b> Technology</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Войдите, чтобы начать сеанс</p>

        <?php $form = ActiveForm::begin(["id" => "login-form"]); ?>
            <?= $form
                ->field($model, "username")
                ->textInput(["autofocus" => true, "placeholder" => "Логин"]) ?>
            <?= $form
                ->field($model, "password")
                ->passwordInput(["placeholder" => "Пароль"]) ?>
            
            <div class="row">
                <div class="col-xs-8">
                    <?= $form
                        ->field($model, "rememberMe")
                        ->checkbox()
                        ->label('Запомнить меня') ?>
                </div>
                <div class="col-xs-4">
                    <?= Html::submitButton("Войти", [
                        "class" => "btn btn-primary btn-block btn-flat",
                        "name" => "login-button",
                    ]) ?>
                </div>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->