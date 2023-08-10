<?php

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css',
        '/adminlte/bower_components/font-awesome/css/font-awesome.min.css',
        '/adminlte/bower_components/Ionicons/css/ionicons.min.css',
        '/adminlte/dist/css/AdminLTE.min.css',

        // AdminLTE Skins. We have chosen the skin-blue for this starter
        // page. However, you can choose any other skin. Make sure you
        // apply the skin class to the body tag so the changes take effect. 
        '/adminlte/dist/css/skins/skin-blue.min.css',

        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',

    ];
    public $js = [
        // <!-- jQuery 3 -->
        // '/adminlte/bower_components/jquery/dist/jquery.min.js',
        // <!-- Bootstrap 3.3.7 -->
        '/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js',
        // <!-- AdminLTE App -->
        '/adminlte/dist/js/adminlte.min.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}
