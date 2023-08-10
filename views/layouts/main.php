<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap\Html;
use yii\helpers\Url;
use app\widgets\MenuWidget;
use app\widgets\JivoChat;


$address_links = Yii::$app->view->params["address_links"];
$servicesData = Yii::$app->view->params["servicesData"];
AppAsset::register($this);

$lang = Yii::$app->language;
$this->registerCsrfMetaTags();
$this->registerMetaTag(["charset" => Yii::$app->charset], "charset");
$this->registerMetaTag([
    "name" => "viewport",
    "content" => "width=device-width, initial-scale=1, shrink-to-fit=no",
]);
$this->registerMetaTag([
    "name" => "description",
    "content" => $this->params["meta_description"] ?? "",
]);
$this->registerMetaTag([
    "name" => "keywords",
    "content" => $this->params["meta_keywords"] ?? "",
]);
$this->registerLinkTag([
    "rel" => "icon",
    "type" => "image/x-icon",
    "href" => Yii::getAlias("/resources/images/logo-2-362x96.png"),
]);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head(); ?>
</head>

<body>
    <?php $this->beginBody(); ?>
    <?= JivoChat::widget() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <section data-bs-version="5.1" class="menu menu1 cid-sXT21XmgXk" once="menu" id="amenu1-1">
        <nav class="navbar navbar-dropdown navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="<?= Url::home(); ?>"><img src="/resources/images/logo-2-362x96.png" alt="" style="height: 3rem;"></a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <?= MenuWidget::widget() ?>
                    </ul>
                    <div class="mbr-section-btn"><a class="btn btn-primary display-4" href="tel:<?= $address_links["phone_number"]; ?>"><?= $address_links["phone_number"]; ?></a></div>
                    <style>
                        .tel-menu {
                            display: flex;
                            justify-content: center;
                        }

                        .image-container {
                            display: flex;
                            align-items: center;
                        }

                        .lang_img {
                            /* bayroqlar razmeri */
                            width: 30px;
                            margin-right: 10px;
                            /*orasidagi razmer*/
                        }
                    </style>
                    <div class="tel-menu">
                        <div class="image-container">
                            <?php
                            //bayroq img va lang 
                            if (Yii::$app->language !== "uz") {
                                echo Html::a(
                                    Html::img(Yii::getAlias("@web") . "/resources/images/uzb.jpg", [
                                        "class" => "lang_img flag",
                                    ]),
                                    array_merge(Yii::$app->request->get(), [
                                        Yii::$app->controller->route,
                                        "language" => "uz",
                                    ])
                                );
                            }
                            if (Yii::$app->language !== "en") {
                                echo Html::a(
                                    Html::img(Yii::getAlias("@web") . "/resources/images/usa.jpg", [
                                        "class" => "lang_img flag",
                                    ]),
                                    array_merge(Yii::$app->request->get(), [
                                        Yii::$app->controller->route,
                                        "language" => "en",
                                    ])
                                );
                            }
                            if (Yii::$app->language !== "ru") {
                                echo Html::a(
                                    Html::img(Yii::getAlias("@web") . "/resources/images/russia.jpg", [
                                        "class" => "lang_img flag",
                                    ]),
                                    array_merge(Yii::$app->request->get(), [
                                        Yii::$app->controller->route,
                                        "language" => "ru",
                                    ])
                                );
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    <?= Alert::widget() ?>
    <?= $content ?>
    <section data-bs-version="5.1" class="footer1 expertm5 cid-tuMgeJFFu0" once="footers" id="afooter1-z">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="item-wrap">
                        <div class="navbar-brand">
                            <span class="navbar-logo">
                                <a href="<?php echo Url::home(); ?>">
                                    <img src="/resources/images/logo-1-362x96.png" style="height: 4.2rem;">
                                </a>
                            </span>
                        </div>
                        <div class="social-list">
                            <div class="soc-item">
                                <a href="<?php echo $address_links["telegram"]; ?>"><span class="mbr-iconfont mbr-iconfont-social socicon-telegram socicon"></span></a>
                            </div>
                            <div class="soc-item">
                                <a href="<?php echo $address_links["facebook"]; ?>"><span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span></a>
                            </div>
                            <div class="soc-item">
                                <a href="<?php echo $address_links["instagram"]; ?>"><span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-links">
                    <div class="item-wrap">
                        <h5 class="mbr-section-subtitle mbr-fonts-style display-4">
                            <!--footer menu-->
                            <a class="text-white text-primary" href="<?php echo Url::home(); ?>"><?php echo Yii::t("common", "Главная"); ?></a>
                        </h5>
                        <ul class="list mbr-fonts-style display-4">

                            <li class="mbr-text item-wrap">
                                <a class="text-white text-primary" href="<?php echo Url::to(["site/about"]); ?>"><?php echo Yii::t("common", "О компании"); ?></a>
                            </li>
                            <li class="mbr-text item-wrap">
                                <a class="text-white text-primary" href="<?php echo Url::to(["site/our-services"]); ?>"><?php echo Yii::t("common", "Услуги"); ?></a>
                            </li>
                            <li class="mbr-text item-wrap">
                                <a class="text-white text-primary" href="<?php echo Url::to(["site/projects"]); ?>"><?php echo Yii::t("common", "Проекты"); ?></a>
                            </li>
                            <li class="mbr-text item-wrap">
                                <a class="text-white text-primary" href="<?php echo Url::to(["news/index"]); ?>"><?php echo Yii::t("common", "Новости"); ?></a>
                            </li>
                            <li class="mbr-text item-wrap">
                                <a class="text-white text-primary" href="<?php echo Url::to(["site/our-mission"]); ?>"><?php echo Yii::t("common", "Наша миссия"); ?></a>
                            </li>
                            <li class="mbr-text item-wrap">
                                <a class="text-white text-primary" href="<?php echo Url::to(["site/vacancies"]); ?>"><?php echo Yii::t("common", "Вакансии"); ?></a>
                            </li>
                            <li class="mbr-text item-wrap">
                                <a class="text-white text-primary" href="<?php echo Url::to(["site/index", "#" => "map2-8a"]); ?>"><?php echo Yii::t("common", "Контакты"); ?></a>
                            </li>

                        </ul>

                        <!--linklar o'chirildi 404 bo'lmasligi uchun-->
                    </div>
                </div>

                <?php

                if (count($servicesData) >= 0) {
                    // Define the desired number of items per <div>
                    $itemsPerDiv = 4; // Display 4 items in each <div>

                    // Initialize a counter to keep track of the items
                    $itemCount = 0;

                    // Loop through the $servicesData array to generate the <div> elements and their content
                    foreach ($servicesData as $index => $service) {
                        // Check if it's time to open a new <div> element
                        if ($itemCount === 0) {
                            echo '<div class="col-12 col-sm-6 col-lg-3 col-links">';
                            echo '<div class="item-wrap">';
                            echo '<h5 class="mbr-section-subtitle mbr-fonts-style display-4">';
                            echo '<a href="' . Url::to(['site/our-services']) . '" class="text-white">' . Yii::t('common', 'Услуги') . '</a>';
                            echo '</h5>';
                            echo '<ul class="list mbr-fonts-style display-4">';
                        }

                        // Render the list item in the current <div>
                        echo '<li class="mbr-text item-wrap"><a href="' . Url::to(['site/our-service', 'id' => $service['id']]) . '" class="text-primary">➤ ' . $service['title_' . $lang] . '</a></li>';
                        $itemCount++;

                        // Check if we reached the desired number of items per <div>
                        if ($itemCount === $itemsPerDiv) {
                            // Close the current <div> and reset the counter
                            echo '</ul>';
                            echo '</div>';
                            echo '</div>';

                            // Start a new <div> element
                            $itemCount = 0;

                            // Break the loop if we have already displayed 8 items
                            if ($index >= 7) {
                                break;
                            }
                        }
                    }
                }
                ?>

                <div class="row">
                    <div class="col-12 col-copyright">
                        <div class="border-item"></div>
                        <p class="mbr-text mb-0 mbr-fonts-style copyright align-center display-7">
                            <?php
                            echo Yii::t('common', 'Установка и обслуживание систем безопасности, автоматизации и связи.');
                            ?>
                        </p>
                    </div>
                </div>
                <?php $this->endBody(); ?>
            </div>
        </div>
    </section>
</body>

</html>
<?php $this->endPage(); ?>