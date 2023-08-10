<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AboutUs $model */

$this->title = Yii::t('app', 'Create About Us');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About uses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
