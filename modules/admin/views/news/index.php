<?php

use app\models\News;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\SearchNews $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'News');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create News'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title_ru',
            [
                'attribute' => 'banner_text_ru',
                'format' => 'html',
            ],
            // 'title_uz',
            // 'title_en',
            // 'banner_text_ru:ntext',
            //'banner_text_uz:ntext',
            //'banner_text_en:ntext',
            //'image_banner:ntext',
            [
                'attribute' => 'image_banner',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image_banner, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            //'full_text_ru:ntext',
            //'full_text_uz:ntext',
            //'full_text_en:ntext',
            [
                'attribute' => 'full_text_en',
                'format' => 'html',
            ],
            'created_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, News $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
