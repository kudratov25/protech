<?php

namespace app\models;

use Yii;
use yii\db\Expression;
use yii\web\UploadedFile;

/**
 * This is the model class for table "about_us".
 *
 * @property int $id
 * @property string $text_ru
 * @property string $text_uz
 * @property string $text_en
 * @property string $image
 * @property string|null $date
 */
class AboutUs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_us';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_ru', 'text_uz', 'text_en'], 'required'],
            [['text_ru', 'text_uz', 'text_en'], 'string'],
            [['date'], 'safe'],
            // [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_en' => Yii::t('app', 'Text En'),
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
            $uploadDir = "uploads/about" . date("Y-m-d") . "/";
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
