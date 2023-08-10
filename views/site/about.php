<?php
$lang = Yii::$app->language;
$this->title = Yii::t('app', 'О компании'); 
$this->params['breadcrumbs'][] = $this->title;
use app\widgets\FormWidget;
?>
<section data-bs-version="5.1" class="header11 cid-tuNH6yAece" id="header11-1m">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 image-wrapper">
                <img class="w-100" src="<?php echo Yii::getAlias('@web' . '/' . $about_us->image) ?>">
            </div>
            <div class="col-12 col-md">
                <div class="text-wrapper text-center">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong><?php echo Yii::t('common', 'О компании') ?></strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <strong>
                            <?php echo Yii::t('common', 'Главная') ?> ➤ <?php echo Yii::t('common', 'О компании') ?>
                            <br>
                        </strong>
                    </p>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php
                        echo $about_us['text_' . $lang];
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
 <?= \app\widgets\AdvantagesWidget::widget() ?>
 
<?php
echo $this->render('/components/about_statistics');
echo $this->render('/components/our_clients');
echo $this->render('/components/certificates');
// echo $this->render('/components/form');
echo FormWidget::widget([]);
echo $this->render('/components/google_map');
