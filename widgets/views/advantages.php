<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 26.07.2023
 * Time: 23:50
 */

$lang = Yii::$app->language;
$i+$a;
$icons = [
    "mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn", //iconlar
    "mbri-cursor-click mbr-iconfont mbr-iconfont-btn",
    "mbri-edit mbr-iconfont mbr-iconfont-btn",
    "mobi-mbri mobi-mbri-delivery mbr-iconfont mbr-iconfont-btn",
    "mbri-setting mbr-iconfont mbr-iconfont-btn",
    "icon54-v1-recall mbr-iconfont mbr-iconfont-btn",
];
$this->registerCss("
    .nav-tabs {
        overflow-x: auto;
        -ms-overflow-style: none;  /* scrollbar ni olib tashlash */
        scrollbar-width: none;  
    }

    .nav-tabs::-webkit-scrollbar {
        display: none;
    }

    .nav-item {
        display: inline-block;
    }
");
?>

<section data-bs-version="5.1" class="tabs1 tabs medicalm4_tabs1 cid-tvCPHDWRE8" id="tabs1-3g">
    <div class="container">
        <div class="top-part">
            <h1 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-2">
    <?= Yii::t("common", "Наши преимущества") ?>
             </h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <ul class="nav nav-tabs" role="tablist">
                    <?php if (!empty($advantages) && is_array($advantages)) {
                        $active = "active";
                        $iconIndex = 0;
                        foreach ($advantages as $advantage) { ?>
                            <li role="presentation" class="nav-item <?= $active ?>">
                                <a aria-controls="tab<?= $advantage->id ?>-content" aria-selected="true" class="nav-link mbr-fonts-style <?= $active ?> display-4" data-toggle="tab" href="#tab<?= $advantage->id ?>" role="tab" data-bs-toggle="tab">
                                    <span class="<?= $icons[
                                        $iconIndex++
                                    ] ?>"></span>
                                    <?= $advantage->{"title_$lang"} ?>
                                </a>
                            </li>
                            <?php $active = "";}
                    } else {
                        echo "<p>Bu bo‘limda hozircha ma’lumot yo‘q.</p>";
                    } ?>
                </ul>
                <div class="tab-content">
                    <?php if (!empty($advantages) && is_array($advantages)) {
                        $active = "active";
                        foreach ($advantages as $advantage) { ?>
                            <div aria-labelledby="tab<?= $advantage->id ?>" class="tab-pane <?= $active ?>" id="tab<?= $advantage->id ?>-content" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="<?= Yii::getAlias("@web/") .
                                            $advantage->image_path ?>" alt="" loading="lazy" class="lazyload">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="mbr-fonts-style mbr-section-title align-center mbr-bold display-5">
                                            <?= $advantage->{"title_$lang"} ?>
                                        </h2>
                                        <p class="mbr-text pt-4 mbr-fonts-style display-7">
                                            <?= $advantage->{"description_$lang"} ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php $active = "";}
                    } else {
                        echo "<p>Bu bo‘limda hozircha ma’lumot yo‘q.</p>";
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>