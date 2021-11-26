<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Hoodies */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Hoodies'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hoodies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'articul_product',
            'name',
            'description',
            'description_two',
            'price',
            'name_style',
            'name_material',
            'name_print_thematick1',
            'name_print_thematick2',
            'name_print_thematick3',
            'name_print_place',
            'name_gender',
          //  'color_id',

            [
                'attribute' => 'color_id',
                'format' => 'raw',
                'value' => function ($data) {
                    return $data->getColorName();
                }
            ],



        ],
    ]) ?>

</div>
