<?php

namespace app\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "about_statistic".
 *
 * @property int $id
 * @property string $number
 * @property string $text_ru
 * @property string $text_uz
 * @property string $text_en
 * @property string|null $date
 */
class AboutStatistic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_statistic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'text_ru', 'text_uz', 'text_en'], 'required'],
            [['date'], 'safe'],
            [['number', 'text_ru', 'text_uz', 'text_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'number' => Yii::t('app', 'Number'),
            'text_ru' => Yii::t('app', 'Text Ru'),
            'text_uz' => Yii::t('app', 'Text Uz'),
            'text_en' => Yii::t('app', 'Text En'),
            'date' => Yii::t('app', 'Date'),
        ];
    }
    public function beforeSave($insert)
    {
        $this->date = new Expression('NOW()');
        return parent::beforeSave($insert);
    }
}
