<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\HomeAbout $model */

$this->title = Yii::t('app', 'Create Home About');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Home Abouts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-about-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
