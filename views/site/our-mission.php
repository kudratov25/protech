<?php

use app\widgets\FormWidget;

$this->title = Yii::t('app', 'Наша миссия и ценности');
$this->params['breadcrumbs'][] = $this->title;

$lang = Yii::$app->language;

?>


<section data-bs-version="5.1" class="header6 cid-tHQfcuuAup" id="header6-cx">
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-2">
                    <strong>
                        <?php echo Yii::t('common', 'Наша миссия и ценности') ?>
                    </strong>
                </h1>
                <p class="mbr-text mbr-white mbr-fonts-style display-7">
                    <strong>
                        <?php echo Yii::t('common', 'Главная') ?> ➤&nbsp;<?php echo Yii::t('common', 'Наша миссия и ценности') ?>
                    </strong>
                    <br><br>
                    <?php
                    echo $mission['small_title_' . $lang]
                    ?>
                </p>

            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header11 cid-tHQhi3mtKX" id="header11-d0">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 image-wrapper">
                <img class="w-100" src="<?php echo Yii::getAlias('@web') . '/' . $mission['image1'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center left-zero">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>
                            <?php echo $mission['title_1_' . $lang] ?>
                        </strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7 text-start">
                        <?php echo $mission['text1_' . $lang] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header11 cid-tHQiQhXto8" id="header11-d1">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 image-wrapper">
                <img class="w-100 lazyload" src="<?php echo Yii::getAlias('@web') . '/' . $mission['image2'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center right-zero">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong><?php echo $mission['title_2_' . $lang] ?></strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $mission['text2_' . $lang] ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="header11 cid-tHQiQSign1" id="header11-d2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 image-wrapper">
                <img class="w-100 lazyload" src="<?php echo Yii::getAlias('@web') . '/' . $mission['image3'] ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center left-zero">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong><?php echo $mission['title_3_' . $lang] ?></strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $mission['text3_' . $lang] ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>




<?php


echo $this->render('/components/our_clients');
echo $this->render('/components/certificates');
echo FormWidget::widget([]);
echo $this->render('/components/google_map');
