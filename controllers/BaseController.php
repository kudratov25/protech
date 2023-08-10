<?php

namespace app\controllers;

use app\models\AboutStatistic;
use app\models\AddressesLinks;
use app\models\Certificates;
use app\models\Clients;
use app\models\News;
use app\models\Services;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class BaseController extends Controller
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
   

    public function beforeAction($action)
    {
        $about_statistics = AboutStatistic::find()->orderBy(["id" => SORT_ASC])->limit(4)->all();
        $our_clients = Clients::find()->all();
        $certificates = Certificates::find()->all();
        $address_links = AddressesLinks::find()->orderBy(['id' => SORT_DESC])->one();
        $our_services = Services::find()->orderBy(['id' => SORT_DESC])->limit(4)->all();
        $news = News::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();
        $servicesData = Services::find()->all();

        Yii::$app->view->params["about_statistics"] = $about_statistics;
        Yii::$app->view->params["our_clients"] = $our_clients;
        Yii::$app->view->params["certificates"] = $certificates;
        Yii::$app->view->params["address_links"] = $address_links;
        Yii::$app->view->params["our_services"] = $our_services;
        Yii::$app->view->params["news"] = $news;
        Yii::$app->view->params["servicesData"] = $servicesData;

        return parent::beforeAction($action);
    }

}
