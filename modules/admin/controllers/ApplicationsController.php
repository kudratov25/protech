<?php

namespace app\modules\admin\controllers;

use app\components\NotFoundHttpException;
use app\models\Application;
// use app\modules\admin\components\NotFoundHttpException;
use Yii;

/**
 * Admin controller for the `admin` module
 */
class ApplicationsController extends AdminAccessController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if (
            ($messages = Application::find()
                ->orderBy(["date" => SORT_DESC])
                ->all()) !== null
        ) {
            return $this->render("index", compact("messages"));
        } else {
            throw new NotFoundHttpException();
        }
    }
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render("view", [
            "model" => $model,
        ]);
    }
    public function actionMessageRead($id)
    {
        $model = Application::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException(
                "The requested page does not exist."
            );
        }
        if ($model->status !== 1) {
            Yii::$app->session->setFlash(
                "success",
                "Сообщение отмечено как прочитанное."
            );
            $model->status = 1;
            $model->save(false);
        }
        return $this->redirect(["view", "id" => $id]);
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->delete();

        Yii::$app->session->setFlash(
            "success",
            "Сообщение было успешно удалено."
        );

        return $this->redirect(["index"]);
    }

    protected function findModel($id)
    {
        $model = Application::findOne($id);
        if (!$model) {
            throw new NotFoundHttpException(
                "The requested page does not exist."
            );
        }
        return $model;
    }
    //boshqa CRM export import uchun misol:
    public function actionRetrieveData()
    {
        $client = new \yii\httpclient\Client();
        $response = $client
            ->createRequest()
            ->setMethod("GET")
            ->setUrl("http://api.example.com/data")
            ->send();

        if ($response->isOk) {
            $data = $response->getData();

            $name = $data["name"];
            $phone = $data["phone"];
            $date = $data["date"];

            return $this->render("data", [
                "name" => $name,
                "phone" => $phone,
                "date" => $date,
            ]);
        } else {

            Yii::error("Error retrieving data: " . $response->content);
            throw new \yii\web\HttpException(
                500,
                "Ошибка при получении данных"
            );
        }
    }
}
