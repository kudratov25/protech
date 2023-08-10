<?php

/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 3:10
 */

namespace app\models;

use Yii;
use yii\web\UploadedFile;
use app\components\BaseActiveRecord;
use app\models\ProjectImages;
use app\helpers\ArrayHelper;

/**
 * @property int $id
 * @property string $title_ru
 * @property string $title_en
 * @property string $title_uz
 * @property string $description_ru
 * @property string $description_en
 * @property string $description_uz
 * @property string|null $gallery
 */

class Projects extends BaseActiveRecord
{
    const SCENARIO_CREATE = "create";
    const SCENARIO_UPDATE = "update";

    public $uploadFiles;
    public $upload;
    public $image;
    public $mainImageIndex;

    public static function tableName()
    {
        return "projects";
    }

    public function getImages()
    {
        return $this->hasMany(ProjectImages::className(), [
            "project_id" => "id",
        ]);
    }
    public function getProjectImages()
    {
        return $this->hasMany(ProjectImages::className(), [
            "project_id" => "id",
        ]);
    }

    public function setMainImageFilename($value)
    {
        $this->mainImageFilename = $value;
    }

    public function getMainImageFilename()
    {
        $mainImage = $this->mainImage;

        if ($mainImage) {
            return $mainImage->image_path;
        }

        return null;
    }


    public function getMainImage()
    {
        return $this->hasOne(ProjectImages::className(), ['project_id' => 'id'])
            ->where(['main' => true]);
    }
    public function getImageOptions()
    {
        return ArrayHelper::map(
            $this->projectImages,
            "image_path",
            "image_path"
        );
    }

    public function rules()
    {
        return [
            [
                [
                    "title_ru",
                    "title_en",
                    "title_uz",
                   
                ],
                "required",
            ],
            [["description_ru", "description_en", "description_uz"], "string"],
            [["title_ru", "title_en", "title_uz"], "string", "max" => 255],
            [
                "image",
                "file",
                "extensions" => "png, jpg",
                "on" => [self::SCENARIO_CREATE, self::SCENARIO_UPDATE],
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            "id" => "ID",
            "title_ru" => "Title Ru",
            "title_en" => "Title En",
            "title_uz" => "Title Uz",
            "description_ru" => "Description Ru",
            "description_en" => "Description En",
            "description_uz" => "Description Uz",
            "image" => "Image",
            "uploadFiles" => "images for project",
            "main_image" => "Main image",
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_CREATE] = [
            "title_ru",
            "title_en",
            "title_uz",
            "description_ru",
            "description_en",
            "description_uz",
            "image",
            
        ];
        $scenarios[self::SCENARIO_UPDATE] = [
            "title_ru",
            "title_en",
            "title_uz",
            "description_ru",
            "description_en",
            "description_uz",
            //"image",
            
        ];
        return $scenarios;
    }

    public function beforeSave($insert)
    {

        if ($file = UploadedFile::getInstance($this, "main_image")) {
            $uploadDir = "uploads/projects" . "/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $this->main_image = $path;
            } else {
                Yii::error("Failed to save uploaded file.");
            }
        }

        return parent::beforeSave($insert);
    }
    public function upload()
    {
        foreach ($this->uploadFiles as $file) {
            $uploadDir = "uploads/projects/" . date("Y-m-d") . "/";
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
            $filename = $this->generateFileName($file);
            $path = $uploadDir . $filename;
            $absolutePath = Yii::getAlias("@webroot") . "/" . $path;
            if ($file->saveAs($absolutePath)) {
                $projectImage = new ProjectImages();
                $projectImage->project_id = $this->id;
                $projectImage->image_path = $path;
                if (!$projectImage->save()) {
                    Yii::error(
                        "Unable to save project image: " .
                            print_r($projectImage->errors, true)
                    );
                    return false;
                }
            } else {
               echo Yii::error("Failed to save uploaded file.");
                return false;
            }
        }
        return true;
    }

    protected function generateFileName($file)
    {
        return uniqid() . "." . $file->extension;
    }

    public function deleteImages()
    {
        foreach ($this->images as $image) {
            $image->delete();
        }
    }
}
