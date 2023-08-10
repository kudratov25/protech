<?php

namespace app\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "jobs".
 *
 * @property int $id
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_en
 * @property string|null $text_ru
 * @property string|null $text_uz
 * @property string|null $text_en
 * @property string|null $dropdown_key
 */
class Jobs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jobs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_ru', 'title_uz', 'title_en'], 'string', 'max' => 255],
            [['text_ru', 'text_uz', 'text_en', 'dropdown_key'], 'string'],
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
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'dropdown_key' => Yii::t('app', 'Dropdown Key'),
        ];
    }
    public function beforeSave($insert)
    {
        // save current date time automatically
        if ($this->isNewRecord) { // only for new records
            $this->created_at = new Expression('NOW()'); // set the current date and time
        }
        $this->dropdown_key = uniqid();


        
        return parent::beforeSave($insert);
    }
}
