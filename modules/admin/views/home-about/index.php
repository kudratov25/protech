<?php

use app\models\HomeAbout;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\HomeAboutSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Home About');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="home-about-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>

        <?php

        echo Html::a(Yii::t('app', 'Create Home About'), ['create'], ['class' => 'btn btn-success']);

        ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        // 'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'title_ru',
            // 'title_uz',
            // 'title_en',
            'content_ru:ntext',
            //'content_uz:ntext',
            //'content_en:ntext',
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
                'urlCreator' => function ($action, HomeAbout $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>