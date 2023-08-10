<?php
/**
 * Created by PhpStorm.
 * User: Sodikjon Karimov ( @donotlookforme )
 * Date: 29.04.2023
 * Time: 15:07
 */

/** @var \yii\web\View @this */

/** @var $roles [] */

use app\helpers\Html;
use app\components\View;
?>
    <div class='btn-group'>
        <?php foreach ($roles as $role) {
            echo Html::a(
                Html::encode($role["name"]),
                ["permission", "id" => $role["id"]],
                [
                    "title" => $role["info"],
                    "class" =>
                        "btn " .
                        ($role["id"] == $id ? "btn-primary" : "btn-default"),
                ]
            );
        } ?>
    </div>

<?php if ($id == 1) { ?>
    <div class="alert alert-danger" role="alert">
        <?= t("Root admin нельзя изменить.") ?>
    </div>
<?php return;} ?>
    <hr/>

<?php echo Html::beginForm(
    [Yii::$app->controller->action->id, "id" => $id],
    "post"
); ?>
    <table id='id_permissions' style='width: 100%' class='table table-striped table-bordered table-condensed'>
        <?php foreach ($allperms as $class => $perms):
            $r = strtolower(substr($class, 0, -10)); ?>
            <tr>
                <td><?php echo Html::checkBox(null, false, [
                    "id" => "id_parent_" . $r,
                    "class" => "parents",
                    "value" => $r,
                ]); ?></td>
                <th colspan='2'>
                    <label for="<?php echo "id_parent_" .
                        $r; ?>" class="show label label-primary"
                           style="margin: 0; padding: 7px 0"><?php echo $class; ?></label>
                </th>
            </tr>
            <?php foreach ($perms as $p):

                $id = "id_perms_" . str_replace("/", "_", $p);
                $checked = isset($userperms[$p])
                    ? (bool) $userperms[$p]
                    : false;
                ?>
            <tr>
                <td style='width: 1%'>
                    <?php echo Html::checkBox("perms[" . $p . "]", $checked, [
                        "id" => $id,
                        "class" => "role",
                        "style" => "margin: 0;",
                    ]); ?>
                </td>
                <td style="width: 200px;"><label style="margin: 0;" class='show'
                                                 for="<?php echo $id; ?>"><?php echo $p; ?></label></td>
                <td><label class='show' style="margin: 0;" for="<?php echo $id; ?>"><?php echo "&nbsp;"; ?></label></td>
            </tr>
        <?php
            endforeach; ?>
        <?php
        endforeach; ?>
    </table>

    <div class='row'>
        <div class='col-md-2'>
            <blockquote>
                <button type="submit" name="save" class='btn btn-success btn-block'>Сохранить</button>
            </blockquote>
        </div>
    </div>
     <?php if (Yii::$app->session->hasFlash('success')): ?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('success') ?>
            </div>
        <?php endif; ?>
        <?php if (Yii::$app->session->hasFlash('error')): ?>
            <div class="alert alert-danger" role="alert">
                <?= Yii::$app->session->getFlash('error') ?>
            </div>
        <?php endif; ?>

<?php Html::endForm(); ?>

<?php $this->registerJs(
    '$("#id_permissions input[type=checkbox].role").change(function(){
            var c = $(this).is(":checked") ? "label label-success" : "label label-danger";
            $(this).parent().next().find("label").
            removeClass("label label-success").
            removeClass("label label-danger").
            addClass(c);
        }).change();

        $("#id_permissions input[type=checkbox].parents").change(function(){
            var e = $("#id_permissions input[type=checkbox][name^=\"perms\["+$(this).val()+"\"].role");
            e.removeAttr("checked").change();
            if ($(this).is(":checked"))
                e.attr("checked", "checked").change();
        });',
    View::POS_READY,
    "my-button-handler"
);
?>
