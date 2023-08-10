<?php

use app\models\MissionText;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Mission Texts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mission-text-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mission Text'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'small_title_ru:ntext',
            // 'small_title_uz:ntext',
            // 'small_title_en:ntext',
            'title_1_ru',
            //'title_1_uz',
            //'title_1_en',
            //'text1_ru:ntext',
            //'text1_uz:ntext',
            //'text1_en:ntext',
            //'image1',
            'title_2_ru',
            //'title_2_uz',
            //'title_2_en',
            // 'text2_ru:ntext',
            //'text2_uz:ntext',
            //'text2_en:ntext',
            //'image2',
            'title_3_ru',
            //'title_3_uz',
            //'title_3_en',
            // 'text3_en:ntext',
            //'text3_ru:ntext',
            //'text3_uz:ntext',
            //'image3',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, MissionText $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
