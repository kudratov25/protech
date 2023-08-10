<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AddressesLinks $model */

$this->title = Yii::t('app', 'Create Addresses Links');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Addresses Links'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addresses-links-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
