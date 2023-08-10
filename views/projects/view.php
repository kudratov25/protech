<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 3:45
 */
$lang = Yii::$app->language;
$this->title = $project['title_' . $lang];
$this->params['breadcrumbs'][] = $this->title;

?>
&nbsp
&nbsp
<section data-bs-version="5.1" class="header6 cid-tyxQUzHq70" id="header6-47">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md">
                <div class="text-wrapper">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-5 text-start"><strong><?php echo $project['title_' . $lang] ?></strong></h1>
                    <p class="mbr-text mbr-fonts-style display-7 text-start">
                        <?php echo Yii::t('common', 'Главная') ?> ➤ <?php echo Yii::t('common', 'Проекты') ?> ➤ <?php echo $project['title_' . $lang] ?><br><br>&nbsp;<br>
                    </p>
                </div>
                <?php echo $project['description_' . $lang] ?>
            </div>
        </div>
    </div>
</section>



<section data-bs-version="5.1" class="gallery4 mbr-gallery cid-tyxSZ3p4CL" id="gallery4-4c">
    <div class="container">
        <div class="row mbr-gallery mt-4">
            <?php foreach ($project->images as $i => $image) : ?>
                <div class="col-12 col-md-6 col-lg-4 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-bs-toggle="modal" data-target="#tHUaUgMWs7-modal" data-bs-target="#tHUaUgMWs7-modal">
                        <img class="w-100 lazyload" src="<?= Yii::getAlias('@web/' . $image->image_path) ?>" alt="Project Image" data-slide-to="<?= $i ?>" data-bs-slide-to="<?= $i ?>" data-target="#lb-tHUaUgMWs7" data-bs-target="#lb-tHUaUgMWs7">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="tHUaUgMWs7-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel slide" id="lb-tHUaUgMWs7" data-interval="5000" data-bs-interval="5000">
                            <div class="carousel-inner">
                                <?php foreach ($project->images as $i => $image) : ?>
                                    <div class="carousel-item <?= $i == 0 ? 'active' : '' ?>">
                                        <img class="d-block w-100 lazyload" src="<?= Yii::getAlias('@web/' . $image->image_path) ?>" alt="Project Image">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <ol class="carousel-indicators">
                                <?php foreach ($project->images as $i => $image) : ?>
                                    <li data-slide-to="<?= $i ?>" data-bs-slide-to="<?= $i ?>" class="<?= $i == 0 ? 'active' : '' ?>" data-target="#lb-tHUaUgMWs7" data-bs-target="#lb-tHUaUgMWs7"></li>
                                <?php endforeach; ?>
                            </ol>
                            <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close"></a>
                            <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" data-bs-slide="prev" href="#lb-tHUaUgMWs7">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Предыдущий</span>
                            </a>
                            <a class="carousel-control-next carousel-control" role="button" data-slide="next" data-bs-slide="next" href="#lb-tHUaUgMWs7">
                                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden">Следующий</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>