<?php
use app\components\View;
$this->title = Yii::t('app', 'Вакансии'); 
$this->params['breadcrumbs'][] = $this->title;
$lang = Yii::$app->language;
$script = <<<JS
    $(document).ready(function(){
        $(".panel-title").click(function(e){
            e.preventDefault();
            var target = $(this).data('target');
            $(target).collapse('toggle');
        });
    });
JS;
?>
<section data-bs-version="5.1" class="header6 cid-tyxPsW7jrS mbr-parallax-background" id="header6-45">
    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(0, 0, 0);"></div>
    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-2">
                    <strong><?php echo Yii::t("common", "Вакансии"); ?></strong>
                </h1>
                <p class="mbr-text mbr-white mbr-fonts-style display-7">
                    <?php echo Yii::t("common", "Главная"); ?> ➤ <?php echo Yii::t("common", "Вакансии"); ?><br>
                </p>
            </div>
        </div>
    </div>
</section>
<section data-bs-version="5.1" class="content16 cid-tuNS0r0Vns" id="content16-2u">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div id="bootstrap-accordion_148" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <?php
                    foreach ($jobs as $job) { ?>

                        <div class="card mb-3">
                            <div class="card-header" role="tab" id="headingOne">
                                <a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" data-target="#<?php echo $job["dropdown_key"]; ?>" aria-expanded="false" aria-controls="collapse1">
                                    <h6 class="panel-title-edit mbr-fonts-style mb-0 display-7">
                                        <strong>
                                            <?php echo $job["title_" . $lang]; ?>
                                        </strong>
                                    </h6>
                                    <span class="sign mbr-iconfont mbri-arrow-down"></span>
                                </a>
                            </div>
                            <div id="<?php echo $job["dropdown_key"]; ?>" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_148">
                                <div class="panel-body">
                                    <p class="mbr-fonts-style panel-text display-4">
                                        от 4 000 000 до 15 000 000 сум на руки
                                        <?php echo $job["text_" . $lang]; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    $this->registerJs($script, app\components\View::POS_READY);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
echo $this->render('/components/google_map')
?>