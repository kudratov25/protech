<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_uz
 * @property string $title_en
 * @property string $banner_text_ru
 * @property string $banner_text_uz
 * @property string $banner_text_en
 * @property string $image_banner
 * @property string $full_text_ru
 * @property string $full_text_uz
 * @property string $full_text_en
 * @property string $created_at
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru', 'title_uz', 'title_en', 'banner_text_ru', 'banner_text_uz', 'banner_text_en', 'full_text_ru', 'full_text_uz', 'full_text_en', 'created_at'], 'required'],
            [['banner_text_ru', 'banner_text_uz', 'banner_text_en', 'full_text_ru', 'full_text_uz', 'full_text_en'], 'string'],
            [['created_at'], 'safe'],
            [['title_ru', 'title_uz', 'title_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title_ru' => Yii::t('app', 'Title Ru'),
            'title_uz' => Yii::t('app', 'Title Uz'),
            'title_en' => Yii::t('app', 'Title En'),
            'banner_text_ru' => Yii::t('app', 'Banner Text Ru'),
            'banner_text_uz' => Yii::t('app', 'Banner Text Uz'),
            'banner_text_en' => Yii::t('app', 'Banner Text En'),
            'image_banner' => Yii::t('app', 'Image Banner'),
            'full_text_ru' => Yii::t('app', 'Full Text Ru'),
            'full_text_uz' => Yii::t('app', 'Full Text Uz'),
            'full_text_en' => Yii::t('app', 'Full Text En'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }

    public function beforeSave($insert)
    {
        
        if ($file = UploadedFile::getInstance($this, "image_banner")) {
            $uploadDir = "uploads/news" . "/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image_banner = $path;
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
