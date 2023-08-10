<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "certificates".
 *
 * @property int $id
 */
class Certificates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'image' => Yii::t('app', 'Image'),
            'name' => Yii::t('app', 'Name'),

        ];
    }
    public function beforeSave($insert)
    {
        if ($file = UploadedFile::getInstance($this, 'image')) {
            $uploadDir = "uploads/certificates" . "/" . date("Y-m-d") . "/";
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
