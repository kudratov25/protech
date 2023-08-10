<?php

use yii\helpers\Url;

$our_services = Yii::$app->view->params["our_services"];
$lang  = Yii::$app->language;

?>
<section data-bs-version="5.1" class="gallery3 cid-tuGKsgFss0" id="gallery3-9">
    <div class="container-fluid">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong><?php echo Yii::t('common', 'Наши услуги'); ?></strong>
            </h4>
        </div>


        <div class="row mt-4">
            <?php foreach ($our_services as $service) {
            ?>
                <div class="item features-image сol-12 col-md-6 col-lg-3">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="<?php echo Yii::getAlias('@web' . '/' . $service['image_main']) ?>">
                        </div>
                        <div class="item-content">
                            <p class="mbr-text mbr-fonts-style mt-3 display-7"><?php echo $service['title_' . $lang] ?><br></p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="<?php echo Url::to(['/site/our-service', 'id' => $service->id]) ?>" class="btn btn-primary item-btn display-4"><?php echo Yii::t('common', 'Подробнее') ?></a></div>
                    </div>
                </div>
            <?php
            } ?>
        </div>

        <?php
        // $isPrintOurServicesAll = true;
        if (count($our_services) > 3) {
        ?>
            <div class="mbr-section-btn align-center"><a class="btn btn-secondary display-4" href="<?php echo Url::to(['/site/our-services']) ?>">
                    <?php echo Yii::t('common', 'Смотреть все услуги') ?>
                </a></div>
        <?php
        }
        ?>

    </div>
</section>