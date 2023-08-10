<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Services $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Services'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="services-view">

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

            // 'image_bg',
            
            'title_ru:ntext',
            'title_uz:ntext',
            'title_en:ntext',
            // 'image_main',
            [
                'attribute' => 'image_main',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image_main, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'text_ru:ntext',
            'text_uz:ntext',
            'text_en:ntext',

            [
                'attribute' => 'text_full_ru',
                'format' => 'html',
            ],
            [
                'attribute' => 'text_full_uz',
                'format' => 'html',
            ],

            [
                'attribute' => 'text_full_en',
                'format' => 'html',
            ],


            // 'text_full_ru:ntext',
            // 'text_full_uz:ntext',
            // 'text_full_en:ntext',
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
            'short_description_ru:ntext',
            'short_description_uz:ntext',
            'short_description_en:ntext',
            [
                'attribute' => 'image_bg',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image_bg, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            'created_at',
        ],
    ]) ?>

</div>