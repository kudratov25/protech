<?php

namespace app\modules\admin\models;

use Yii;
use app\components\BaseActiveRecord;

class Api extends BaseActiveRecord
{
    public static function tableName()
    {
        return "api";
    }

    public function rules()
    {
        return [
            [["telegram_token", "telegram_chat_id", "widgetId"], "required"],
            [
                [
                    "telegram_token",
                    "telegram_chat_id",
                    "bitrix_24_api",
                    "widgetId",
                ],
                "string",
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            "id" => Yii::t("app", "ID"),
            "telegram_token" => Yii::t("app", "Telegram Token"),
            "telegram_chat_id" => Yii::t("app", "Telegram Chat ID"),
            "bitrix_24_api" => Yii::t("app", "Bitrix24 API"),
            "widgetId" => Yii::t("app", "Jivosite ID"),
        ];
    }
}
