<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

$this->title = $model->title_ru;
?>

<h1><?= Html::encode($this->title) ?></h1>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'title_ru',
        'title_en',
        'title_uz',
        [
            'attribute' => 'description_ru',
            'format' => 'html'
        ],
        [
            'attribute' => 'description_en',
            'format' => 'html'
        ],
        [
            'attribute' => 'description_uz',
            'format' => 'html'
        ],
        // 'description_ru:ntext',
        // 'description_en:ntext',
        // 'description_uz:ntext',
        [
            'attribute' => 'main_image',
            'format' => 'raw',
            'value' => function ($model) {
                return Html::img('/web/' . $model->main_image, ['class' => 'img-responsive', 'width' => '100']);
            },
        ],
    ],
]) ?>

<h2>Изображения проекта:</h2>

<?php foreach ($projectImages as $image) : ?>
    <img style="max-width: 300px;" src="<?= Url::to('@web/' . $image->image_path) ?>" alt="Project Image">
    <br>
    <br>
<?php endforeach; ?>