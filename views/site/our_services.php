<?php

use app\widgets\FormWidget;
use Cocur\Slugify\Slugify;
use yii\helpers\Url;
$this->title = Yii::t('app', 'Услуги'); 
$this->params['breadcrumbs'][] = $this->title;
$lang = Yii::$app->language;
?>
<section data-bs-version="5.1" class="header6 cid-tyxJP9H3Ew" id="header6-40">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-2"><strong><?php echo Yii::t('common', 'Наши услуги') ?></strong></h1>
                <p class="mbr-text mbr-white mbr-fonts-style display-7"><strong>
                        <?php echo Yii::t('common', 'Главная'); ?> ➤ <?php echo Yii::t('common', 'Услуги') ?>
                    </strong></p>
            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="gallery3 cid-tuNKJhahlQ" id="gallery3-1t">
    <div class="container-fluid">
        <div class="row mt-4">
            <!-- foreach here from -->
            <?php foreach ($services as $service) {
            ?>
                <div class="item features-image сol-12 col-md-6 col-lg-3 active">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="<?php echo Yii::getAlias('@web' . '/' . $service['image_main']) ?>">
                        </div>
                        <div class="item-content">
                            <p class="mbr-text mbr-fonts-style mt-3 display-7"><?php echo $service['title_' . $lang] ?><br></p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="<?= yii\helpers\Url::to(['/site/our-service', 'id' => $service->id]) ?>" class="btn btn-primary item-btn display-4"><?php echo Yii::t('common', 'Подробнее') ?></a></div>
                    </div>
                </div>
            <?php
            } ?>
        </div>
    </div>
</section>
<?php

// echo $this->render('/components/services');

echo $this->render('/components/our_clients');
echo FormWidget::widget([]);
echo $this->render('/components/google_map');
