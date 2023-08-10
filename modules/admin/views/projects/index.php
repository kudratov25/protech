<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Проекты';
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Добавить новый', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        // 'id',
        'title_ru',
        // 'title_en',
        // 'title_uz',
        [
            'attribute' => 'description_ru',
            'format' => 'html'
        ],
        [
            'attribute' => 'main_image',
            'format' => 'raw',
            'value' => function ($model) {
                return Html::img('/web/' . $model->main_image, ['class' => 'img-responsive', 'width' => '100']);
            },
        ],
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>