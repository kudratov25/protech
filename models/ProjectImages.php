<?php

namespace app\models;

use Yii;
use app\components\BaseActiveRecord;
use app\models\Projects;

/**
 * @property int $id
 * @property int $project_id
 * @property string $image_path
 * @property Projects $project
 */

class ProjectImages extends BaseActiveRecord
{
    public static function tableName()
    {
        return "project_images";
    }

    public function rules()
    {
        return [
            [["project_id", "image_path"], "required"],
            [["project_id"], "integer"],
            [["image_path"], "string", "max" => 255],
            [
                ["project_id"],
                "exist",
                "skipOnError" => true,
                "targetClass" => Projects::class,
                "targetAttribute" => ["project_id" => "id"],
            ],
        ];
    }

    public function attributeLabels()
    {
        return [
            "id" => "ID",
            "project_id" => "Project ID",
            "image_path" => "Image Path",
        ];
    }

    public function getProject()
    {
        return $this->hasOne(Projects::class, ["id" => "project_id"]);
    }
}
