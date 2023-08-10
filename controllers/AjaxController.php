<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 2:41
 */
namespace app\controllers;

use Yii;
use yii\web\Response;
use yii\web\Controller;
use app\models\ProjectImages;
use app\models\Projects;
use yii\web\UploadedFile;

class AjaxController extends Controller
{
    public function actionUpdateMainImage()
    {
        try {
            Yii::$app->response->format = Response::FORMAT_JSON;

            $filename = Yii::$app->request->post("filename");

            $image = ProjectImages::findOne(["image_path" => $filename]);

            if ($image) {
                if ($this->setMainImage($image)) {
                    return ["success" => true];
                }
            }
            return [
                "success" => false,
                "message" =>
                    "Не удалось обновить основное изображение. Изображение не найдено.",
            ];
        } catch (\Exception $e) {
            Yii::error("Ошибка установки основного изображения: " . $e->getMessage());
            return ["success" => false, "message" => $e->getMessage()];
        }
    }
}
