<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\News $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'News'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="news-view">

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
            // 'id',
            'title_ru',
            'title_uz',
            'title_en',
            [
                'attribute' => 'banner_text_ru',
                'format' => 'html',
            ],
            [
                'attribute' => 'banner_text_uz',
                'format' => 'html',
            ],
            [
                'attribute' => 'banner_text_en',
                'format' => 'html',
            ],
            // 'banner_text_ru:ntext',
            // 'banner_text_uz:ntext',
            // 'banner_text_en:ntext',
            // 'image_banner:ntext',
            [
                'attribute' => 'image_banner',
                'format' => 'raw',
                'value' => function ($model) {
                    return Html::img('/web/' . $model->image_banner, ['class' => 'img-responsive', 'width' => '100']);
                },
            ],
            [
                'attribute' => 'full_text_ru',
                'format' => 'html',
            ],
            [
                'attribute' => 'full_text_en',
                'format' => 'html',
            ],
            [
                'attribute' => 'full_text_uz',
                'format' => 'html',
            ],
            // 'full_text_ru:ntext',
            // 'full_text_uz:ntext',
            // 'full_text_en:ntext',
            'created_at',
        ],
    ]) ?>

</div>
