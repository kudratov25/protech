<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AuthAsset;
use app\widgets\Alert;
use yii\bootstrap\Html;
use yii\web\View;

AuthAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('/resources/images/admin-logo.png')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?= Html::encode($this->title) ?></title>
    <?php 
    $this->head();
    $this->registerJsFile('@web/js/jquery.min.js', ['position' => View::POS_HEAD]);
    ?>



</head>

<body class="hold-transition login-page">
    <?php $this->beginBody() ?>

    <?= Alert::widget() ?>
    <?= $content ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>