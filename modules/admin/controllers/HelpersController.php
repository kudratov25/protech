<?php

namespace app\modules\admin\controllers;


class HelpersController extends AdminAccessController
{
    public $layout = 'admin';
    public function actionError()
    {
       return $this->render('404');
    }
}
