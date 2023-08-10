<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addresses_links".
 *
 * @property int $id
 * @property string $phone_number
 * @property string $google_address
 * @property string $email
 * @property string $telegram
 * @property string $facebook
 * @property string $instagram
 */
class AddressesLinks extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'addresses_links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone_number', 'google_address', 'address_name_ru', 'address_name_uz', 'address_name_en', 'email', 'telegram', 'facebook', 'instagram'], 'required'],
            [['google_address'], 'string'],
            [['email'], 'email'],
            [['phone_number', 'email', 'telegram', 'facebook', 'instagram', 'address_name_ru', 'address_name_uz', 'address_name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'google_address' => Yii::t('app', 'Google Address'),
            'address_name_ru' => Yii::t('app', 'Address name RU'),
            'address_name_uz' => Yii::t('app', 'Address name UZ'),
            'address_name_en' => Yii::t('app', 'Address name EN'),
            'email' => Yii::t('app', 'Email'),
            'telegram' => Yii::t('app', 'Telegram'),
            'facebook' => Yii::t('app', 'Facebook'),
            'instagram' => Yii::t('app', 'Instagram'),
        ];
    }
}
