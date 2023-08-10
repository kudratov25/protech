<?php

use app\models\AddressesLinks;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Addresses Links');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="addresses-links-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Addresses Links'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'options' => [ 'style' => 'table-layout:fixed;' ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn',
            'contentOptions' => ['style' => 'width:100px;'],  // not max-width
        ],

            // 'id',
            'phone_number',
            'address_name_ru',
            'email:email',
            'telegram',
            'facebook',
            'instagram',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AddressesLinks $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>