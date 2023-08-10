<?php

use yii\helpers\Url;
$this->title = Yii::t('app', 'Спасибо. Заявка принята!'); 
$this->params['breadcrumbs'][] = $this->title;
?>
<section data-bs-version="5.1" class="header6 cid-tEqKTl81hn mbr-fullscreen" id="header6-85">
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1">
                    <strong><?php echo Yii::t('common', 'Спасибо. Заявка принята!') ?></strong>
                </h1>
                <p class="mbr-text mbr-white mbr-fonts-style display-7">
                    <?php echo Yii::t('common', 'Наш менеджер свяжется с вами в ближайшее время.') ?>
                </p>
                <div class="mbr-section-btn mt-3">
                    <a class="btn btn-black display-4" href="<?php echo Url::home() ?>">
                        <?php echo Yii::t('common', 'Вернуться в главное') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>