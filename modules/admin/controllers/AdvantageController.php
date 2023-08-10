<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 22:42
 */

namespace app\modules\admin\controllers;

use Yii;
use app\models\Advantage;
use app\components\RootController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;

class AdvantageController extends RootController 
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            "query" => Advantage::find(),
        ]);

        return $this->render("index", [
            "dataProvider" => $dataProvider,
        ]);
    }

    public function actionAdd()
    {
        $model = new Advantage();
        $model->scenario = Advantage::SCENARIO_ADD;

        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, "image");

            if ($model->save()) {
                return $this->redirect(["index"]);
            }
        }

        return $this->render("add", [
            "model" => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = Advantage::SCENARIO_EDIT;

        if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, "image");

            if ($model->save()) {
                return $this->redirect(["view", "id" => $model->id]);
            }
        }

        return $this->render("update", [
            "model" => $model,
        ]);
    }

    public function actionView($id)
    {
        return $this->render("view", [
            "model" => $this->findModel($id),
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Advantage::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(
            "Запрашиваемая страница не существует."
        );
    }
}
