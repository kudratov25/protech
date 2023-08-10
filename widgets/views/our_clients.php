<?php
use app\models\Clients;
$our_clients = Yii::$app->view->params['our_clients'] = Clients::find()->all();


$lang = Yii::$app->language;

?>

<section data-bs-version="5.1" class="slider5 mbr-embla cid-tECOoyGWg0" id="slider5-86">
    <div class="position-relative">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong><?php echo Yii::t('common', 'Наши клиенты') ?></strong>
            </h4>
        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true" data-auto-play-interval="3" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">

                    <?php
                    foreach ($our_clients as $client) {

                    ?>
                        <div class="embla__slide slider-image item active" style="margin-left: 1rem; margin-right: 1rem;">
                            <div class="slide-content">
                                <div class="item-img">
                                    <div class="item-wrapper">
                                        <img src="<?php echo Yii::getAlias('@web' . '/' . $client['image']) ?>" alt="<?php echo $client['name'] ?>">
                                        <!-- <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" title="" data-slide-to="0" data-bs-slide-to="0" loading="lazy" class="lazyload" data-src="/resources/images/clients-1-450x300.jpg"> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }  ?>
                </div>
            </div>
            <button class="embla__button embla__button--prev">
                <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Previous</span>
            </button>
            <button class="embla__button embla__button--next">
                <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only visually-hidden visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>