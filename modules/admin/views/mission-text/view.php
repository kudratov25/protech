<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\MissionText $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mission Texts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mission-text-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'small_title_ru:ntext',
            'small_title_uz:ntext',
            'small_title_en:ntext',
            'title_1_ru',
            'title_1_uz',
            'title_1_en',

            [
                'attribute' => 'text1_ru',
                'format' => 'html',
            ],
            [
                'attribute' => 'text1_uz',
                'format' => 'html',
            ],

            [
                'attribute' => 'text1_en',
                'format' => 'html',
            ],

            // 'text1_ru:ntext',
            // 'text1_uz:ntext',
            // 'text1_en:ntext',



            // 'image1',
            [
                'attribute' => 'image1',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image1, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'title_2_ru',
            'title_2_uz',
            'title_2_en',

            [
                'attribute' => 'text2_ru',
                'format' => 'html',
            ],
            [
                'attribute' => 'text2_uz',
                'format' => 'html',
            ],

            [
                'attribute' => 'text2_en',
                'format' => 'html',
            ],


            // 'text2_ru:ntext',
            // 'text2_uz:ntext',
            // 'text2_en:ntext',
            
            // 'image2',
            [
                'attribute' => 'image2',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image2, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'title_3_ru',
            'title_3_uz',
            'title_3_en',

            [
                'attribute' => 'text3_ru',
                'format' => 'html',
            ],
            [
                'attribute' => 'text3_uz',
                'format' => 'html',
            ],

            [
                'attribute' => 'text3_en',
                'format' => 'html',
            ],

            // 'text3_en:ntext',
            // 'text3_ru:ntext',
            // 'text3_uz:ntext',


            // 'image3',
            [
                'attribute' => 'image3',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image3, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
        ],
    ]) ?>

</div>