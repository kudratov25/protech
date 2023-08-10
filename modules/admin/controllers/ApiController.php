<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 06.05.2023
 * Time: 19:14
 */

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use app\modules\admin\models\Api;
use app\components\RootController;

class ApiController extends RootController
{
    public function actionIndex()
    {
        $apis = Api::find()->all();

        return $this->render("index", [
            "apis" => $apis,
        ]);
    }
    public function actionView($id)
    {
        $model = $this->findModel($id);

        return $this->render("view", [
            "model" => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Api::findOne($id);

        if (!$model) {
            throw new NotFoundHttpException(
                "Запрашиваемая страница не существует."
            );
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash("success", t("Успешно сохранено."));
            return $this->redirect(["view", "id" => $model->id]);
        }

        return $this->render("update", [
            "model" => $model,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Api::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(
            "Запрашиваемая страница не существует."
        );
    }
}
