<?php

use yii\helpers\Url;

$news = Yii::$app->view->params["news"];
$lang = Yii::$app->language;
?>
<section data-bs-version="5.1" class="gallery1 cid-tuNPvxuzru" id="gallery1-2e">
    <div class="container">
        <div class="row mt-4">
            <?php

            foreach ($news as $new) {
            ?>

                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="<?php echo Yii::getAlias('@web' . '/' . $new['image_banner']) ?>">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong><?php echo $new['title_' . $lang] ?></strong></h5>
                            <h6 class="item-subtitle mbr-fonts-style mt-1 display-4">
                                <em><?= Yii::$app->formatter->asDate($new->created_at, 'php:d.m.Y'); ?></em>
                            </h6>
                            <p class="mbr-text mbr-fonts-style mt-3 display-7"><?php $text = $new['banner_text_' . $lang];
                                                                                $end_of_first_sentence = strpos($text, '.');
                                                                                $first_sentence = substr($text, 0, $end_of_first_sentence + 1);
                                                                                echo $first_sentence; ?> <br></p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2"><a href="<?php echo Url::to(['/news/view', 'id' => $new['id']]) ?>" class="btn btn-primary item-btn display-7"><?php echo Yii::t('common', 'Подробнее') ?></a></div>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header1 factm5 cid-tuHE71l7jp" id="aheader2-p">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="mbr-section-btn align-center"><a class="btn btn-primary display-7" href="<?php echo Url::to(['news']) ?>"><?php echo Yii::t('common', 'Все новости') ?></a></div>
            </div>
        </div>
    </div>
</section>