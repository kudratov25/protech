<?php

use app\models\AboutUs;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\AboutUsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'About uses');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="about-us-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'text_ru:ntext',
            // 'text_uz:ntext',
            // 'text_en:ntext',
            // 'image',
            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'date',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, AboutUs $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
