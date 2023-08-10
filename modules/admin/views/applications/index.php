<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = Yii::t('app', 'Заявка на звонков');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="messages">
    <div class="row">

        <?php
        foreach ($messages as $message) {
        ?>

            <div class="col-md-9">

                <?= DetailView::widget([
                    'model' => $message,

                    'attributes' => [
                        // 'id',
                        'name',
                        [
                            'attribute' => 'date',
                            'label' => 'Время',
                            'value' => function ($message) {
                                $dateTime = new DateTime($message->date, new DateTimeZone('Asia/Tashkent'));
                                return Yii::$app->formatter->asDatetime($dateTime->getTimestamp(), 'MMM d, H:mm');
                            },
                        ],
                        [
                            'attribute' => 'status',
                            'label' => 'Статус',
                            'value' => function ($message) {
                                if ($message->status == 0) {
                                    return '<span class="badge" style="background-color: #f70303">Непрочитано..</span>';
                                } elseif ($message->status == 1) {
                                    return '<span class="badge" style="background-color: #00a65a"> Прочитано ... </span>';
                                } else {
                                    return '';
                                }
                            },
                            'format' => 'raw',
                        ],
                    ],
                ]) ?>
                <br>
            </div>

            <div class="col-md-3">

                <p>
                    <br>
                    <br>
                    <?= Html::a('Прочитать', ['message-read', 'id' => $message->id], ['class' => 'btn btn-success']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $message->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
        <?
        }
        ?>
    </div>
</div>