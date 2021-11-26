<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HoodiesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Hoodies');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hoodies-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Hoodies'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'articul_product',
            'name',
            'description',
            'description_two',
            //'price',
            //'name_style',
            //'name_material',
            //'name_print_thematick1',
            //'name_print_thematick2',
            //'name_print_thematick3',
            //'name_print_place',
            //'name_gender',
            //'color_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
