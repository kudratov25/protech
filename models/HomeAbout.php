<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "home_about".
 *
 * @property int $id
 * @property string $title_ru
 * @property string $title_uz
 * @property string $title_en
 * @property string $content_ru
 * @property string $content_uz
 * @property string $content_en
 * @property string $image
 * @property string|null $date
 */
class HomeAbout extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru', 'title_uz', 'title_en', 'content_ru', 'content_uz', 'content_en'], 'required'],
            [['content_ru', 'content_uz', 'content_en'], 'string'],
            [['date'], 'safe'],
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
            'content_ru' => Yii::t('app', 'Content Ru'),
            'content_uz' => Yii::t('app', 'Content Uz'),
            'content_en' => Yii::t('app', 'Content En'),
            'image' => Yii::t('app', 'Image'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
    public function beforeSave($insert)
    {
        if ($this->isNewRecord) {
            $this->date = new Expression('NOW()');
        }
        if ($file = UploadedFile::getInstance($this, "image")) {
            $uploadDir = "uploads/home/about" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->image = $path;
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
