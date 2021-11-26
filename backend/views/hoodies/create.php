<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hoodies */

$this->title = Yii::t('app', 'Create Hoodies');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hoodies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoodies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
