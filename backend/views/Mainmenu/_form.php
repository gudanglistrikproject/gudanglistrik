<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Mainmenu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mainmenu-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vNama_menu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vLink')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nAktif')->dropDownList([ 'Y' => 'Y', 'N' => 'N', ], ['prompt' => '---Select Action---']) ?>

    <div class="modal-footer">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
    </div>

    <?php ActiveForm::end(); ?>

</div>
