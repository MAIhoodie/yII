<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HoodiesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hoodies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'articul_product') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'description_two') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'name_style') ?>

    <?php // echo $form->field($model, 'name_material') ?>

    <?php // echo $form->field($model, 'name_print_thematick1') ?>

    <?php // echo $form->field($model, 'name_print_thematick2') ?>

    <?php // echo $form->field($model, 'name_print_thematick3') ?>

    <?php // echo $form->field($model, 'name_print_place') ?>

    <?php // echo $form->field($model, 'name_gender') ?>

    <?php // echo $form->field($model, 'color_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
