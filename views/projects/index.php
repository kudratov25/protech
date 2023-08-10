<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 3:39
 */

use yii\helpers\Url;
$this->title = Yii::t('app', 'Наши проекты'); 
$this->params['breadcrumbs'][] = $this->title;

$lang = Yii::$app->language;
?>

<section data-bs-version="5.1" class="header6 cid-tyxKuK3bo9" id="header6-41">


    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">

                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-2"><strong><?php echo Yii::t("app", "Наши проекты"); ?></strong></h1>
                <p class="mbr-text mbr-white mbr-fonts-style display-7"><?php echo Yii::t("common", "Главная"); ?> ➤ <?php echo Yii::t("common", "Проекты"); ?></p>

            </div>
        </div>
    </div>
</section>


<section data-bs-version="5.1" class="gallery1 cid-tuNPvxuzru" id="gallery1-2e">
    <div class="container">
        <div class="row mt-4">
            <?php foreach ($projects as $project) { ?>
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="<?php echo Yii::getAlias("@web/" . $project->main_image); ?>">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-7"><strong><?php echo $project["title_" . $lang]; ?></strong></h5>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2">
                            <a href="<?php echo Url::to(["/projects/view", "id" => $project["id"]]); ?>" class="btn btn-primary item-btn display-7">
                                <?php echo Yii::t("common", "Подробнее"); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?= \app\widgets\OurClientWidget::widget() ?>
<?= \app\widgets\CertificateWidget::widget() ?>
<?= \app\widgets\ThanksgivingWidget::widget() ?>

<?php echo $this->render("../components/google_map"); ?>