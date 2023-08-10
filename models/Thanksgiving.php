<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 4:10
 */

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use app\components\BaseActiveRecord;

/**
 * @property int $id
 * @property string $image
 */

class Thanksgiving extends BaseActiveRecord
{
    public $uploadImage;

    public static function tableName()
    {
        return "thanksgiving";
    }

    public function rules()
    {
        return [
            [
                ["image"],
                "file",
                "skipOnEmpty" => false,
                "extensions" => "png, jpg, jpeg, gif",
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            "id" => "ID",
            "image" => "Изображение",
        ];
    }

    public function uploadImage()
    {
        if ($this->validate()) {
            $uploadedFile = UploadedFile::getInstance($this, "image");
            $filename =
                Yii::$app->security->generateRandomString() .
                "." .
                $uploadedFile->extension;

            $date = date("Y-m-d");
            $relativePath = "/uploads/thanksgiving/" . $date;
            $uploadPath = Yii::getAlias("@webroot") . $relativePath;

            if (!is_dir($uploadPath)) {
                mkdir($uploadPath, 0755, true);
            }

            $uploadedFile->saveAs($uploadPath . "/" . $filename);
            $this->image = $relativePath . "/" . $filename; 

            return true;
        } else {
            return false;
        }
    }
}
