<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AboutStatistic $model */

$this->title = Yii::t('app', 'Create About Statistic');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'About Statistics'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-statistic-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
