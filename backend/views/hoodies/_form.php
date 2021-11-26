<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hoodies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoodies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'articul_product')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_two')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'name_style')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_material')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_print_thematick1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_print_thematick2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_print_thematick3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_print_place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
