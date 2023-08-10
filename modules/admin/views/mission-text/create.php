<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\MissionText $model */

$this->title = Yii::t('app', 'Create Mission Text');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mission Texts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-text-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
