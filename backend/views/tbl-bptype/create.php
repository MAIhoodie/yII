<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblBptype */

$this->title = 'Create Tbl Bptype';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Bptypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-bptype-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
