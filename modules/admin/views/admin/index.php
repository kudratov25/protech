<?php

/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 25.07.2023
 * Time: 0:01
 */

use yii\helpers\Html;
use app\models\Application;
use app\models\Visitor;


//24 soatdagi xabar va kirgan odamlar soni
$count = (new Application())->getNewApplicationsCount();
$numVisitors = Visitor::getVisitorsLast24Hours();

$this->title = "Панель управления";
$this->params["breadcrumbs"] = [["label" => $this->title]];
?>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>
                    <a style="color: white;" href="<?= yii\helpers\Url::to(['admin/applications ']) ?>"> <?php echo $count ?>
                    </a>
                </h3>

                <p>Новое сообщение</p>
            </div>
            <div class="icon">
                <i class="fa fa-envelope-o"></i>
            </div>
            <a href="<?= yii\helpers\Url::to(['applications/index']) ?>" class="small-box-footer">Открыть все сообщения <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo $numVisitors ?></h3>

                <p>Посещаемость сайта за день</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->