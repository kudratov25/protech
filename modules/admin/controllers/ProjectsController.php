<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.07.2023
 * Time: 17:08
 */

namespace app\modules\admin\controllers;

use Yii;
use app\components\RootController;
use app\models\Projects;
use app\models\ProjectImages;
use yii\web\UploadedFile;
use yii\helpers\FileHelper;
use app\components\NotFoundHttpException;

class ProjectsController extends RootController
{
    public function actionCreate()
    {
        $model = new Projects(["scenario" => Projects::SCENARIO_CREATE]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->uploadFiles = UploadedFile::getInstances(
                $model,
                "uploadFiles"
            );

            if ($model->uploadFiles) {
                foreach ($model->uploadFiles as $file) {
                    $folderName = "uploads/projects" . date("Y-m-d");
                    FileHelper::createDirectory($folderName);
                    $fileName =
                        $folderName .
                        "/" .
                        Yii::$app->security->generateRandomString() .
                        "." .
                        $file->extension;

                    $file->saveAs($fileName);
                    $projectImage = new ProjectImages([
                        "project_id" => $model->id,
                        "image_path" => $fileName,
                        
                    ]);
                    $projectImage->save();
                }

                return $this->redirect(["view", "id" => $model->id]);
            }
        }

        return $this->render("create", ["model" => $model]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = Projects::SCENARIO_UPDATE;

        if ($model->load(Yii::$app->request->post())) {
            $model->uploadFiles = UploadedFile::getInstances(
                $model,
                "uploadFiles"
            );

            if ($model->uploadFiles && count($model->uploadFiles) > 0) {
                foreach ($model->uploadFiles as $file) {
                    $folderName = "uploads/projects/" . date("Y-m-d");
                    FileHelper::createDirectory($folderName);
                    $fileName =
                        $folderName .
                        "/" .
                        Yii::$app->security->generateRandomString() .
                        "." .
                        $file->extension;

                    $file->saveAs($fileName);
                    $projectImage = new ProjectImages([
                        "project_id" => $model->id,
                        "image_path" => $fileName,
                    ]);
                    $projectImage->save();
                }
            }
            if ($model->save()) {
                Yii::$app->session->setFlash(
                    "success",
                    "Обновление прошло успешно."
                ); 
                return $this->redirect(["view", "id" => $model->id]);
            } else {
                Yii::$app->session->setFlash("error", "Не удалось обновить."); 
            }
        }

        return $this->render("update", ["model" => $model]);
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->deleteImages();
        $model->delete();

        return $this->redirect(["index"]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);

        $projectImages = ProjectImages::findAll(["project_id" => $id]);

        return $this->render("view", [
            "model" => $model,
            "projectImages" => $projectImages,
        ]);
    }

    public function actionIndex()
    {
        $dataProvider = new \yii\data\ActiveDataProvider([
            "query" => Projects::find(),
            "pagination" => [
                "pageSize" => 20,
            ],
        ]);

        return $this->render("index", [
            "dataProvider" => $dataProvider,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Projects::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException("Запрошенный проект не существует.");
    }
}
