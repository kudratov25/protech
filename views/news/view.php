<?php
$lang = Yii::$app->language;
$this->title = Yii::t('app', 'Новости'); 
$this->params['breadcrumbs'][] = $this->title;

?>

<section data-bs-version="5.1" class="header11 cid-tCVJkUolvG" id="header11-82">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100 lazyload" src="<?php echo Yii::getAlias('@web' . '/' . $new['image_banner']) ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center left-zero">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5"><strong><?php echo $new['title_' . $lang] ?></strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo Yii::t('common', 'Главная') ?> ➤ <?php echo Yii::t('common', 'Новости') ?> ➤ <?= Yii::$app->formatter->asDate($new->created_at, 'php:d.m.Y'); ?> <br><br><?php echo $new['banner_text_' . $lang] ?>&nbsp;<br></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="header18 cid-tCVISeQFwb" id="header18-81">
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 text-start">
                <?php echo $new['full_text_' . $lang] ?>
                
            </div>
        </div>
    </div>
</section>


<?php
echo $this->render('../components/google_map');
?>