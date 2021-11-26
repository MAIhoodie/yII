<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chest */

$this->title = 'Create Chest';
$this->params['breadcrumbs'][] = ['label' => 'Chests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
