<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "mission_text".
 *
 * @property int $id
 * @property string|null $small_title_ru
 * @property string|null $small_title_uz
 * @property string|null $small_title_en
 * @property string|null $title_1_ru
 * @property string|null $title_1_uz
 * @property string|null $title_1_en
 * @property string|null $text1_ru
 * @property string|null $text1_uz
 * @property string|null $text1_en
 * @property string|null $image1
 * @property string|null $title_2_ru
 * @property string|null $title_2_uz
 * @property string|null $title_2_en
 * @property string|null $text2_ru
 * @property string|null $text2_uz
 * @property string|null $text2_en
 * @property string|null $image2
 * @property string|null $title_3_ru
 * @property string|null $title_3_uz
 * @property string|null $title_3_en
 * @property string|null $text3_en
 * @property string|null $text3_ru
 * @property string|null $text3_uz
 * @property string|null $image3
 */
class MissionText extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mission_text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['small_title_ru', 'small_title_uz', 'small_title_en', 'text1_ru', 'text1_uz', 'text1_en', 'text2_ru', 'text2_uz', 'text2_en', 'text3_en', 'text3_ru', 'text3_uz'], 'string'],
            [['title_1_ru', 'title_1_uz', 'title_1_en', 'title_2_ru', 'title_2_uz', 'title_2_en', 'title_3_ru', 'title_3_uz', 'title_3_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'small_title_ru' => Yii::t('app', 'Small Title Ru'),
            'small_title_uz' => Yii::t('app', 'Small Title Uz'),
            'small_title_en' => Yii::t('app', 'Small Title En'),
            'title_1_ru' => Yii::t('app', 'Title 1 Ru'),
            'title_1_uz' => Yii::t('app', 'Title 1 Uz'),
            'title_1_en' => Yii::t('app', 'Title 1 En'),
            'text1_ru' => Yii::t('app', 'Text1 Ru'),
            'text1_uz' => Yii::t('app', 'Text1 Uz'),
            'text1_en' => Yii::t('app', 'Text1 En'),
            'image1' => Yii::t('app', 'Image1'),
            'title_2_ru' => Yii::t('app', 'Title 2 Ru'),
            'title_2_uz' => Yii::t('app', 'Title 2 Uz'),
            'title_2_en' => Yii::t('app', 'Title 2 En'),
            'text2_ru' => Yii::t('app', 'Text2 Ru'),
            'text2_uz' => Yii::t('app', 'Text2 Uz'),
            'text2_en' => Yii::t('app', 'Text2 En'),
            'image2' => Yii::t('app', 'Image2'),
            'title_3_ru' => Yii::t('app', 'Title 3 Ru'),
            'title_3_uz' => Yii::t('app', 'Title 3 Uz'),
            'title_3_en' => Yii::t('app', 'Title 3 En'),
            'text3_en' => Yii::t('app', 'Text3 En'),
            'text3_ru' => Yii::t('app', 'Text3 Ru'),
            'text3_uz' => Yii::t('app', 'Text3 Uz'),
            'image3' => Yii::t('app', 'Image3'),
        ];
    }

    public function beforeSave($insert)
    {

        if ($file = UploadedFile::getInstance($this, "image1")) {
            $uploadDir = "uploads/mission" . "/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image1 = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }


        if ($file = UploadedFile::getInstance($this, "image2")) {
            $uploadDir = "uploads/mission" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image2 = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }

        if ($file = UploadedFile::getInstance($this, "image3")) {
            $uploadDir = "uploads/mission" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image3 = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }
        return parent::beforeSave($insert);
    }

    protected function generateFileName($file)
    {
        return uniqid() . "." . $file->extension;
    }
}
