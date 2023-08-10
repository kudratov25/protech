<!-- Left side column. contains the logo and sidebar -->
<?php
$roleId = Yii::$app->user->identity->role_id;
?>

<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php

                    use yii\helpers\Url;

                    echo Yii::$app->user->identity->username ?></p>
                <!-- Status -->
                <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">HEADER</li>

            <li class="treeview">
                <a href="#"><i class="fa fa-home"></i> <span>Главная страница</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= yii\helpers\Url::to(['home-about/index']) ?>"><i class="fa fa-info"></i> О нас</a></li>
                    <li><a href="<?= yii\helpers\Url::to(['advantage/index']) ?>"><i class="fa fa-info"></i> Наши преимущества</a></li>

                </ul>
            </li>


            <li class="treeview">
                <a href="#"><i class="fa fa-info"></i> <span>О нас</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= yii\helpers\Url::to(['about-us/index']) ?>"><i class="fa fa-info"></i> О нас</a></li>
                    <li><a href="<?= yii\helpers\Url::to(['about-statistic/index']) ?>"><i class="fa fa-info"></i>Статистика</a></li>

                </ul>
            </li>
            <!-- Optionally, you can add icons to the links -->

            <!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li> -->
            <li><a href="<?php echo Url::to(['services/index']) ?>"><i class="fa fa-check-square-o"></i> <span><?php echo  Yii::t('common', 'Наши услуги') ?></span></a></li>
            <li><a href="<?php echo Url::to(['clients/index']) ?>"><i class="fa fa-users"></i> <span>Наши клиенты</span></a></li>
            <li><a href="<?php echo Url::to(['certificates/index']) ?>"><i class="fa fa-print"></i> <span>Сертификаты</span></a></li>
            <li><a href="<?php echo Url::to(['thanksgiving/index']) ?>"><i class="fa fa-print"></i> <span>Благодарственные письма</span></a></li>


            <li><a href="<?php echo Url::to(['addresses-links/index']) ?>"><i class="fa fa-mail-reply-all"></i> <span>Ссылки и адрес</span></a></li>
            <li><a href="<?php echo Url::to(['mission-text/index']) ?>"><i class="fa fa-line-chart"></i> <span>Наша миссия и ценности</span></a></li>
            <li><a href="<?php echo Url::to(['projects/index']) ?>"><i class="fa fa-line-chart"></i> <span>Проекты</span></a></li>
            <br>
            <li><a href="<?php echo Url::to(['applications/index']) ?>"><i class="fa fa-inbox"></i> <span>Заявки с сайта</span></a></li>
            <li><a href="<?php echo Url::to(['api/index']) ?>"><i class="fa fa-chain"></i> <span>API и интеграции</span></a></li>
            <br>


            <?php

            if ($roleId <= 1) {
            ?>
                <li class="treeview">
                    <a href="#"><i class="fa fa-user text-red"></i> <span class="text-danger">Пользователи</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= yii\helpers\Url::to(['users/index']) ?>"><i class="fa fa-user"></i> Пользователи</a></li>
                        <li><a href="<?= yii\helpers\Url::to(['roles/index']) ?>"><i class="fa fa-info"></i> Роли пользователей</a></li>
                        <li><a href="<?= yii\helpers\Url::to(['roles/add']) ?>"><i class="fa fa-plus"></i> Добавить роль</a></li>
                        <li><a href="<?= yii\helpers\Url::to(['roles/permission']) ?>"><i class="fa fa-circle-o"></i> Системные роли</a></li>
                    </ul>
                </li>
            <?php
            } ?>



        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>