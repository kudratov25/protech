<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 22:28
 */

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use app\components\BaseActiveRecord;

class Advantage extends BaseActiveRecord
{
    public $image;
    public $icon;

    const SCENARIO_EDIT = "edit";
    const SCENARIO_ADD = "add";

    public static function tableName()
    {
        return "advantages";
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_EDIT] = [
            "title_ru",
            "title_uz",
            "title_en",
            "description_uz",
            "description_ru",
            "description_en",
            "image_path",
        ];
        $scenarios[self::SCENARIO_ADD] = [
            "title_ru",
            "title_uz",
            "title_en",
            "description_uz",
            "description_ru",
            "description_en",
            "image",
        ];
        return $scenarios;
    }

    public function rules()
    {
        return [
            [
                [
                    "title_ru",
                    "title_uz",
                    "title_en",
                    "description_uz",
                    "description_ru",
                    "description_en",
                ],
                "required",
            ],
            [["title_ru", "title_uz", "title_en"], "string", "max" => 255],
            [["description_uz", "description_ru", "description_en"], "string"],
            [
                ["image"],
                "file",
                "extensions" => "png, jpg, jpeg, gif",
                "skipOnEmpty" => false,
                "on" => self::SCENARIO_ADD,
            ],
            [
                ["image"],
                "file",
                "extensions" => "png, jpg, jpeg, gif",
                "skipOnEmpty" => true,
                "on" => self::SCENARIO_EDIT,
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            "title_ru" => "Заголовок RU",
            "title_en" => "Заголовок EN",
            "title_uz" => "Заголовок UZ",
            "description_ru" => "Описание RU",
            "description_uz" => "Описание UZ",
            "description_en" => "Описание EN",
            "image" => "Изображение",
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $filePath = "uploads/advantages" . DIRECTORY_SEPARATOR;

            if (!is_dir($filePath)) {
                mkdir($filePath, 0775, true);
            }

            $filePath .= $this->image->baseName . "." . $this->image->extension;

            if ($this->image->saveAs($filePath)) {
                $this->image_path = $filePath;
                return true;
            }
        }

        return false;
    }

    public function beforeSave($insert)
    {
        if ($this->image) {
            $this->upload();
        }
        return parent::beforeSave($insert);
    }
}
