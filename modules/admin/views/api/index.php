<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 06.05.2023
 * Time: 19:10
 */
use app\helpers\Html;
use yii\grid\GridView;

$this->title = "Детали API";
$this->params["breadcrumbs"][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<p>В данном контексте представлены настройки переадресации запросов из сайта  в Telegram и таблица для интеграции с 1C-Битрикс24. Рекомендуется не удалять их ни при каких обстоятельствах.</p>
<?= GridView::widget([
    "dataProvider" => new \yii\data\ActiveDataProvider([
        "query" => \app\modules\admin\models\Api::find(),
    ]),
    "columns" => [
        "id",
        "telegram_token",
        "telegram_chat_id",
        "bitrix_24_api",
        'widgetId',
        [
            "class" => "yii\grid\ActionColumn",
            "template" => "{update} {delete}",
            "buttons" => [
                "update" => function ($url, $model, $key) {
                    return Html::a(
                        "Обновить",
                        ["update", "id" => $model->id],
                        ["class" => "btn btn-primary"]
                    );
                },
                "delete" => function ($url, $model, $key) {
                    return Html::a(
                        "Удалить",
                        ["delete", "id" => $model->id],
                        [
                            "class" => "btn btn-danger",
                            "data" => [
                                "confirm" =>
                                    "Вы уверены, что хотите удалить этот элемент?",
                                "method" => "post",
                            ],
                        ]
                    );
                },
            ],
        ],
    ],
]) ?>
<p>Экспортировать данные из заявки в другую CRM.</p>
<p>Можете использовать - app\helpers\BitrixHelper.</p>
<pre><code>
//Пример кода 
                /**
                 $crm_url ga data yuborish URLsi kiritiladi, masalan: http://falshpol.bitrix24.ru/crm/configs/import/lead.php
                 @see https://itnote-tlt.ru/peredacha-lidov-s-sajta-v-crm-bitrix-24/
                 Misol: 
                  $url ='https://[ИМЯ].bitrix24.ru/crm/configs/import/lead.php?
                  LOGIN=[логин]&PASSWORD=[пароль]&TITLE='.str_replace("  
                  ","",$_POST["NAME_CALLBACK"]).'&PHONE_WORK='.str_replace(" 
                  ","",$_POST["PHONE_CALLBACK"]).'&UTM_SOURCE='.str_replace(" 
                  ","",$_POST["UTM_CALLBACK"]).'&EMAIL_WORK='.str_replace(" 
                  ","",$_POST["EMAIL_CALLBACK"]).'&ASSIGNED_BY_ID=15&SOURCE_ID=WEB'; 

                **/
            $crm_url = "https://example.com/api/add_application";
            $crm_data = [
                "name" => $this->name,
                "phone_number" => $this->phone_number,
                "date" => $this->date,
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $crm_url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $crm_data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            Yii::info("Отправили данные заявки в CRM: " . $response);
           
                $client = Yii::$app->get('client');

          

            //
</code></pre>

