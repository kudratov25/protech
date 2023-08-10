<?php
$about_statistics = Yii::$app->view->params["about_statistics"];
$lang  = Yii::$app->language;

?>
<section data-bs-version="5.1" class="numbers1 cid-tuNCcBwDaR" id="numbers01-18">
    <div class="container">
        <div class="row justify-content-center content-row">
            <div class="line"></div>
            <?php
            foreach ($about_statistics as $statistic) {
            ?>
                <div class="card col-md-6 col-lg-3">
                    <div class="card-box">
                        <div class="title">
                            <span class="num mbr-fonts-style display-2"><strong><?php echo $statistic['number'] ?></strong></span>
                        </div>
                        <h4 class="card-title align-left mbr-fonts-style display-7"><?php echo $statistic['text_' . $lang]; ?></h4>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>