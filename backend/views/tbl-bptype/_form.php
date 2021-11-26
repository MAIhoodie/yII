<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblBptype */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-bptype-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bptypename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bptypekod')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
