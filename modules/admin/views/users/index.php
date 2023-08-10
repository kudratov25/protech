<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 28.04.2023
 * Time: 18:41
 */ 

/** @var $data \app\components\ActiveDataProvider */
use app\helpers\Html;
use app\components\RootUser;

$this->title = t("Список администраторов");
$this->params["breadcrumbs"][] = $this->title;
echo Html::a(t("Добавить нового пользователя"), ["add"], ["class" => "btn btn-primary pull-left"])."<br><br>";
?>
<?php if ($data->models): ?>
    <div class="card mb-4 table-responsive">
        <div id="example_wrapper" class="container-fluid dt-bootstrap4 no-footer">
            <div class="row">
                <table class="table table-hover table-bordered dataTable dtr-inline table-striped">
                    <thead>
                    <tr>
                        <th style="width: 1%;" class="text-center"><?php echo t(
                            "ID"
                        ); ?></th>
                        <th class="text-center"><?php echo t("Роль"); ?></th>
                        <th class="text-center"><?php echo t("ФИО"); ?></th>
                        <th class="text-center"><?php echo t(
                            "Логин"
                        ); ?></th>
                        <th class="text-center"><?php echo t("Дата регистрации"); ?></th>
                        <th class="text-center"><?php echo t(
                            "Последнее посещение"
                        ); ?></th>
                            <th class="text-center"><?php echo t(
                            "Редактировать"
                        ); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data->models as $row): ?>
                        <tr>
                            <td class="text-center"><?php echo $row->id; ?></td>
                     <td class="text-center"><?php if ($row->role) {
    echo $row->role->name;
} ?></td>
                            <td class="text-center"><?php echo $row->fio; ?></td>
                            <td class="text-center"><?php echo $row->username; ?></td>
                            <td class="text-center"><?php echo $row->created_at; ?></td>
                            <td class="text-center"><?php echo $row->lasted_at; ?></td>
                            <td class="actions"><?= Html::a(t('<i class="fa fa-fw fa-edit"></i>'),
                              ["update", "id" => $row->id], ["class" => "btn btn-success btn-icon btn-pill btn-sm"] ) ?>
                              </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?= \yii\widgets\LinkPager::widget([
                    "pagination" => $data->pagination,
                ]) ?>
            </div>
        </div>
    </div>
<?php else: ?>
    <p class="alert alert-danger"> <?= t("Информация не найдена.") ?></p>
<?php endif; ?>
