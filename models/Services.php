<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string|null $short_description_ru
 * @property string|null $short_description_uz
 * @property string|null $short_description_en
 * @property string|null $image_bg
 * @property string $title_ru
 * @property string $title_uz
 * @property string $title_en
 * @property string $image_main
 * @property string $text_ru
 * @property string $text_uz
 * @property string $text_en
 * @property string|null $text_full_ru
 * @property string|null $text_full_uz
 * @property string|null $text_full_en
 * @property int|null $isHome
 * @property string|null $created_at
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['short_description_ru', 'short_description_uz', 'short_description_en', 'title_ru', 'title_uz', 'title_en', 'text_ru', 'text_uz', 'text_en', 'text_full_ru', 'text_full_uz', 'text_full_en'], 'string'],
            [['title_ru', 'title_uz', 'title_en', 'text_ru', 'text_uz', 'text_en'], 'required'],
            [['isHome'], 'integer'],
            [['created_at'], 'safe'],
            // [['image_bg', 'image_main'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'short_description_ru' => Yii::t('app', 'Short Description Ru *not required'),
            'short_description_uz' => Yii::t('app', 'Short Description Uz *not required'),
            'short_description_en' => Yii::t('app', 'Short Description En*not required'),
            'image_bg' => Yii::t('app', 'Image Bg *not required'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'image_main' => Yii::t('app', 'Image Main'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'text_full_ru' => Yii::t('app', 'Text Full Ru'),
            'text_full_uz' => Yii::t('app', 'Text Full Uz'),
            'text_full_en' => Yii::t('app', 'Text Full En'),
            'isHome' => Yii::t('app', 'Status in Home carusel'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    public function beforeSave($insert)
    {

        if ($this->isNewRecord) {
            $this->created_at = new Expression('NOW()');
        }

        if ($file = UploadedFile::getInstance($this, "image_bg")) {
            $uploadDir = "uploads/services" . "/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image_bg = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }


        if ($file = UploadedFile::getInstance($this, "image_main")) {
            $uploadDir = "uploads/services" . "/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image_main = $path;
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
