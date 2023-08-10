<?php

/** @var yii\web\View $this */

use app\widgets\FormWidget;
use yii\helpers\Url;
use app\widgets\MenuWidget;

$this->title = 'Protech Technology';
$lang = Yii::$app->language;
?>






<section data-bs-version="5.1" class="slider1 hotelm4_slider1 carousel slide cid-tuGv0nYr84" data-interval="false" data-bs-interval="false" id="slider1-5">

    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-keyboard="false" data-bs-keyboard="false" data-ride="carousel" data-bs-ride="carousel" data-interval="3000" data-bs-interval="3000" data-bs-pause="true" data-pause="true">
            <ol class="carousel-indicators">
                <?php foreach ($slider as $key => $data) : ?>
                    <li data-app-prevent-settings="" data-target="#slider1-5" data-bs-target="#slider1-5" data-slide-to="<?= $key ?>" data-bs-slide-to="<?= $key ?>" <?= $key === 0 ? 'class="active"' : '' ?>></li>
                <?php endforeach; ?>
            </ol>
            <div class="carousel-inner" role="listbox">
                <?php foreach ($slider as $key => $data) : ?>
                    <div class="carousel-item slider-fullscreen-image <?= $key === 0 ? 'active' : '' ?>" data-bg-video-slide="false" style="background-image: url(<?php echo Yii::getAlias('@web' . '/' . $data['image_bg']) ?>);">
                        <div class="container container-slide">
                            <div class="image_wrapper">
                                <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>
                                <img src="<?php echo Yii::getAlias('@web' . '/' . $data['image_bg']) ?>">
                                <div class="carousel-caption justify-content-center">
                                    <div class="col-10 align-center">
                                        <h2 class="mbr-fonts-style display-1">
                                            <div>
                                                <strong>
                                                    <?php echo $data['title_' . $lang] ?>
                                                </strong>
                                            </div>
                                        </h2>
                                        <p class="lead mbr-text mbr-fonts-style display-5">

                                            <?php echo $data['short_description_' . $lang] ?>
                                            <br>
                                        </p>
                                        <div class="mbr-section-btn" buttons="0">
                                            <a class="btn display-4 btn-primary" href="<?= yii\helpers\Url::to(['/site/our-service', 'id' => $data['id']]) ?>"><?php echo Yii::t('common', 'Подробнее') ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" data-bs-slide="prev" href="#slider1-5">
                <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                <span class="sr-only visually-hidden">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" data-bs-slide="next" href="#slider1-5">
                <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                <span class="sr-only visually-hidden">Next</span>
            </a>
        </div>

    </div>

</section>

<section data-bs-version="5.1" class="header11 cid-tuGJCJTiaq" id="header11-7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100" src="<?php echo Yii::getAlias('@web' . '/' . $home_about->image) ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>
                            <?php
                            if (!empty($home_about['title_' . $lang])) {
                                echo $home_about['title_' . $lang];
                            }
                            ?>
                        </strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php
                        if (!empty($home_about['content_'  . $lang])) {
                            echo $home_about['content_' . $lang];
                        }
                        ?>
                    </p>
                    <div class="mbr-section-btn mt-3"><a class="btn btn-secondary display-4" href="<?php echo Url::to('about') ?>"><?php echo Yii::t('common', 'Подробнее') ?></a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- services section -->
<?php
echo $this->render('/components/services');
?>
<!-- services section end -->

<!-- Our advantages section -->

<?= \app\widgets\AdvantagesWidget::widget() ?>
<!-- Our advantages section end -->

<!-- news section start -->
<?php
echo $this->render('/components/news');
?>
<!-- news sectin end -->

<!-- our clinets section -->
<?= \app\widgets\OurClientWidget::widget() ?>
<!-- our clients section end -->

<!-- form section start -->
<?php
echo FormWidget::widget([]);

?>
<!-- form section end -->

<!-- google map section start -->
<?php
echo $this->render('/components/google_map')
?>
<!-- google map sectin end -->