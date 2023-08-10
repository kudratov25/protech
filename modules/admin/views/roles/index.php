<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 29.04.2023
 * Time: 14:25
 */
use app\helpers\Html;
use app\components\ActionColumn;

$this->title = t("Список ролей");
$this->params['breadcrumbs'][] = $this->title;
$this->params['breadcrumbs'][] = t("Список ролей");

echo Html::a(t("Добавить"), ["add"], ["class" => "btn btn-primary pull-left"])."<br><br>";
echo \yii\grid\GridView::widget([
    'dataProvider' => $data,
    'columns' => [
        'id',
        'name',
        'info',
        'created_at',
        [
            'class' => ActionColumn::class
        ],
    ]
]);