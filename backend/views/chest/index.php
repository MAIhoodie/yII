<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Chest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'id_user',
            'id_product',
            'quantity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
