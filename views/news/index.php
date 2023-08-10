<?php

use yii\helpers\Url;

$lang = Yii::$app->language;
$this->title = Yii::t('app', 'Новости'); 
$this->params['breadcrumbs'][] = $this->title;

?>
<section data-bs-version="5.1" class="header6 cid-tyxPg8Of3S mbr-parallax-background" id="header6-44">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-2"><strong><?php echo Yii::t('common', 'Новости') ?></strong>
                </h1>

                <p class="mbr-text mbr-white mbr-fonts-style display-7"><?php echo Yii::t('common', 'Главная') ?> ➤ <?php echo Yii::t('common', 'Новости') ?><br></p>

            </div>
        </div>
    </div>
</section>

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

<?php
echo $this->render('../components/google_map');
?>