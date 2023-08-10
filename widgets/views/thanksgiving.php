<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 27.07.2023
 * Time: 4:38
 */

$lang = Yii::$app->language;
?> 
<section data-bs-version="5.1" class="gallery4 mbr-gallery cid-tvDLld7wH3" id="gallery4-3p">
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2">
                <strong><?= Yii::t('common', 'Благодарственные письма') ?></strong>
            </h3>
        </div>
        <div class="row mbr-gallery mt-4">
            <?php foreach($thanksgivingImages as $index => $image): ?>
                <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                    <div class="item-wrapper" data-bs-toggle="modal" data-bs-target="#tHUaU7uukk-modal">
                        <img class="w-100" src="<?= $image->image ?>" alt="" data-bs-target="#carouselExample" data-bs-slide-to="<?= $index ?>">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="modal fade" id="tHUaU7uukk-modal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php foreach($thanksgivingImages as $index => $image): ?>
                                <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                                    <img src="<?= $image->image ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <a role="button" href="" class="close" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close"></a>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"  data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"  data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>