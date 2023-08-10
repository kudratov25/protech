<?php

namespace app\controllers;

use app\models\AboutUs;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\HomeAbout;
use app\models\Jobs;
use app\models\MissionText;
use app\models\Services;
use app\models\Visitor;
use app\components\Optimize;

class SiteController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            "access" => [
                "class" => AccessControl::class,
                "only" => ["logout"],
                "rules" => [
                    [
                        "actions" => ["logout"],
                        "allow" => true,
                        "roles" => ["@"],
                    ],
                ],
            ],
            "verbs" => [
                "class" => VerbFilter::class,
                "actions" => [
                    "logout" => ["post"],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            "error" => [
                "class" => "yii\web\ErrorAction",
            ],
            "captcha" => [
                "class" => "yii\captcha\CaptchaAction",
                "fixedVerifyCode" => YII_ENV_TEST ? "testme" : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        if (!Yii::$app->request->cookies->has("visitor")) {
            $visitor = new Visitor();
            $visitor->created_at = time();
            $visitor->save();

            Yii::$app->response->cookies->add(
                new \yii\web\Cookie([
                    "name" => "visitor",
                    "value" => true,
                    "expire" => time() + 24 * 60 * 60, // 24 soat ichida kirganlar soni
                ])
            );
        }

        $home_about = HomeAbout::find()
            ->orderBy(["id" => SORT_DESC])
            ->one();
        $slider = Services::find()->where(["isHome" => 1])->orderBy('id', SORT_DESC)->limit(4)->all();

        return $this->render("index", compact(["home_about", "slider"]));
    }

    // action about company
    public function actionAbout()
    {
        $about_us = AboutUs::find()
            ->orderBy(["id" => SORT_DESC])
            ->one();
        return $this->render("about", compact("about_us"));
    }

    // this is list of all services
    public function actionOurServices()
    {
        $services = Services::find()
            ->orderBy(["id" => SORT_ASC])
            ->all();
        return $this->render("our_services", compact("services"));
    }

    // this is showing services description full //slug add
    public function actionOurService($id)
    {

        $service = Services::find()
            ->where(["id" => $id])
            ->one();
        if (!$service) {
            throw new \yii\web\NotFoundHttpException(
                "The requested page does not exist."
            );
        }
        return $this->render("our_service", compact("service"));
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = "";
        return $this->render("login", [
            "model" => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionVacancies()
    {
        $jobs = Jobs::find()
            ->orderBy(["id" => SORT_DESC])
            ->all();
        return $this->render("vacancies", compact("jobs"));
    }

    public function actionOurMission()
    {
        $mission = MissionText::find()
            ->orderBy(["id" => SORT_DESC])
            ->one();
        return $this->render("our-mission", compact("mission"));
    }

    public function actionThanks()
    {
        return $this->render("thanks");
    }
}
