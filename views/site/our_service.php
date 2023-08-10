<?php

use app\widgets\FormWidget;
$this->title = Yii::t('app', 'Услуги'); 
$this->params['breadcrumbs'][] = $this->title;
$lang = Yii::$app->language;
?>

<section data-bs-version="5.1" class="header11 cid-tHPBAZ3okq" id="header11-9i">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 image-wrapper">
                <img class="w-100 lazyload" src="<?php echo Yii::getAlias('@web' . '/' . $service['image_main']) ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5">
                        <strong><?php echo $service['title_' . $lang] ?>
                        </strong>
                    </h1>
                    <p class="mbr-text mbr-fonts-style display-7"><?php echo Yii::t('common', 'Главная') ?> ➤ <?php echo Yii::t('common', 'Услуги') ?> ➤ <?php echo $service['title_' . $lang] ?>


                        <br><br>
                        <?php echo $service['text_' . $lang] ?>

                </div>
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="header6 cid-tHPECcGEhK" id="header6-9o">
    <div class="align-center container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-5">
                </h1>
                <p>
                    <?php
                    echo $service['text_full_' . $lang] ?>
                    
                </p>

            </div>
        </div>
    </div>
</section>

<?php


echo $this->render('/components/our_clients');
echo FormWidget::widget([]);
echo $this->render('/components/google_map');
?>