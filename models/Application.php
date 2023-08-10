<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\Expression;
use app\components\BaseActiveRecord;
use Yii;

class Application extends BaseActiveRecord
{
    public $verifyCode;

    public static function tableName()
    {
        return "application";
    }

    public function actions()
    {
        return [
            "error" => [
                "class" => "yii\web\ErrorAction",
            ],
            // "verifyCode" => [
            //     "class" => "yii\captcha\CaptchaAction",
            //     "fixedVerifyCode" => YII_ENV_TEST ? "testme" : null,
            // ],
        ];
    }
    public function rules()
    {
        return [
            [["name", "phone_number"], "required"],
            [["name", "phone_number"], "string", "max" => 250],
            // ["verifyCode", "captcha"],
        ];
    }
    public function attributeLabels()
    {
        return [
            "name" => Yii::t('app', 'Имя'),
            "phone_number" => Yii::t('app', 'Телефон*'),
            "ip_address" => Yii::t('app', 'IP-адрес'),
            // "verifyCode" => Yii::t('app', 'Проверочный код*'),
        ];
        
    }
    //yangi xabarlarni o'qish uchun, 1 kun ichida kelgan xabarlar
    public function getNewApplicationsCount()
    {
        $count = (int) Application::find()
            ->select("COUNT(*)")
            ->where([">=", "date", new Expression("NOW() - INTERVAL 24 HOUR")])
            ->createCommand()
            ->queryScalar();

        return $count;
    }
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->date = Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss', 'Asia/Tashkent');
                $this->ip_address = $_SERVER["REMOTE_ADDR"];
            }
            return true;
        }
        return false;
    }
    public function afterSave($insert, $changedAttributes)
    {
        if ($insert) {
            $telegram_token = Yii::$app->db
                ->createCommand("SELECT telegram_token FROM api")
                ->queryScalar();
            $telegram_chat_id = Yii::$app->db
                ->createCommand("SELECT telegram_chat_id FROM api")
                ->queryScalar();
            //CRMga data yuborish
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
            // telegramga yuborish
            $message = urlencode(
                "Новая заявка:\nИмя: {$this->name}\nТелефон: {$this->phone_number}\nIP адрес: {$this->ip_address}"
            );

            $ch = curl_init();
            curl_setopt(
                $ch,
                CURLOPT_URL,
                "https://api.telegram.org/bot{$telegram_token}/sendMessage"
            );
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt(
                $ch,
                CURLOPT_POSTFIELDS,
                "chat_id={$telegram_chat_id}&text={$message}"
            );
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $result = curl_exec($ch);
            curl_close($ch);
        }

        parent::afterSave($insert, $changedAttributes);
    }
}
