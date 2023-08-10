<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 5:01
 */

namespace app\modules\admin\controllers;

use Yii;
use app\models\Thanksgiving;
use app\components\RootController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

class ThanksgivingController extends RootController
{
    public function behaviors()
    {
        return [
            "verbs" => [
                "class" => VerbFilter::class,
                "actions" => [
                    "delete" => ["POST"],
                ],
            ],
        ];
    }

     public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            "query" => Thanksgiving::find(),
        ]);

        return $this->render("index", [
            "dataProvider" => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render("view", [
            "model" => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Thanksgiving();

        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, "image");

            if ($model->uploadImage() && $model->save(false)) {
                return $this->redirect(["view", "id" => $model->id]);
            }
        }

        return $this->render("create", [
            "model" => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, "image");

            if ($model->uploadImage() && $model->save(false)) {
                return $this->redirect(["view", "id" => $model->id]);
            }
        }

        return $this->render("update", [
            "model" => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(["index"]);
    }

    protected function findModel($id)
    {
        if (($model = Thanksgiving::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException("Запрашиваемая страница не существует.");
    }
}
