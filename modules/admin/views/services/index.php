<?php

use app\models\Services;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ServicesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Services');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Services'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'short_description_ru:ntext',
            // 'short_description_uz:ntext',
            // 'short_description_en:ntext',
            // [
            //     'attribute' => 'image_bg',
            //     'format' => 'raw',
            //     'value' => function ($model) {
            //         return Html::img('/web/' . $model->image_bg, ['class' => 'img-responsive', 'width' => '100']);
            //     },
            // ],
            'title_ru:ntext',
            //'title_uz:ntext',
            //'title_en:ntext',
            //'image_main',
            [
                'attribute' => 'image_main',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image_main, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'text_ru:ntext',
            //'text_uz:ntext',
            //'text_en:ntext',
            //'text_full_ru:ntext',
            //'text_full_uz:ntext',
            //'text_full_en:ntext',
            // 'isHome',
            [
                'attribute' => 'isHome',
                'format' => 'raw', // Allow raw HTML content
                'value' => function ($model) {
                    // Assuming 'status' is a boolean field (1 for true, 0 for false)
                    if ($model->isHome == 1) {
                        return Html::tag('span', 'ДА', ['style' => 'color: green']);
                    } else {
                        return Html::tag('span', 'НЕТ', ['style' => 'color: red']);
                    }
                },
            ],
            'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Services $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
