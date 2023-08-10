<?php
$address_links = Yii::$app->view->params["address_links"];
$lang = Yii::$app->language;
?>

<section data-bs-version="5.1" class="map2 cid-tHrKNvszZk" id="map2-8a">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d2996.183361375432!2d69.211526!3d41.326626!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDHCsDE5JzM1LjkiTiA2OcKwMTInNDEuNSJF!5e0!3m2!1suz!2sus!4v1690044258890!5m2!1suz!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="custom-row">
                <div class="col-12 col-md-6 map-col"></div>
                <div class="col-12 col-md-6 col-text">
                    <div class="text-wrapper">
                        <div class="text-container">
                            <h2 class="mbr-section-title mbr-fonts-style display-5">
                                <strong>
                                    <?php echo Yii::t('common', 'Будем рады сотрудничать с Вами') ?>
                                </strong>
                            </h2>
                        </div>
                        <div class="cards-container">
                            <h2 class="cards-title mbr-fonts-style display-5">
                                <strong><?php echo Yii::t('common', 'Контакты'); ?></strong>
                            </h2>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="tel:<?php echo $address_links['phone_number'] ?>" class="text-black"><?php echo $address_links['phone_number'] ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont mobi-mbri-map-pin mobi-mbri" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <?php echo $address_links['address_name_' . $lang]; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont mobi-mbri-letter mobi-mbri" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="mailto:<?php echo $address_links['email']; ?>" class="text-black"><?php echo $address_links['email']; ?></a>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont socicon-telegram socicon" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="<?php echo $address_links['telegram']; ?>" class="text-black text-primary">Telegram</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont socicon-instagram socicon" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="<?php echo $address_links['instagram']; ?>" class="text-black text-primary">Instagram</a>
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-wrapper">
                                    <div class="icon-box">
                                        <span class="mbr-iconfont socicon-facebook socicon" style="font-size: 24px;"></span>
                                    </div>
                                    <p class="card-text mbr-fonts-style mb-0 display-7">
                                        <a href="<?php echo $address_links['facebook']; ?>" class="text-black text-primary">Facebook</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-container">
                        </div>
                    </div>
                    <svg class="radial-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59 239" preserveAspectRatio="xMidYMid slice">
                        <path xmlns="http://www.w3.org/2000/svg" d="M0 0H59C35.7061 95.0071 34.4159 147.624 59 239H0V0Z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>