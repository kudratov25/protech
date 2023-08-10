<?php
$certificates = Yii::$app->view->params['certificates'];

?>
<section data-bs-version="5.1" class="slider4 mbr-embla cid-tytkepbTHE" id="slider4-3x">
    <div class="position-relative text-center">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong><?php echo Yii::t('common', 'Сертификаты') ?></strong>
            </h4>

        </div>
        <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true" data-auto-play-interval="5" data-draggable="true">
            <div class="embla__viewport container-fluid">
                <div class="embla__container">

                    <?php
                    foreach ($certificates as $certificate) {
                    ?>
                        <div class="embla__slide slider-image item" style="margin-left: 5rem; margin-right: 5rem;">
                            <div class="slide-content">
                                <div class="item-wrapper">
                                    <div class="item-img">
                                        <img src="<?php echo Yii::getAlias('@web' . '/' . $certificate['image']); ?>" alt="<?php echo Yii::getAlias('@web' . '/' . $certificate['name']) ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?
                    }
                    ?>
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