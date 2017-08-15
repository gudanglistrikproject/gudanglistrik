<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Brand', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=> 'nID_kategori',
                'label'=>'Kategori',
                
            ],
            //'nID_brand',
            //'nID_kategori',
            'vBrand_seo',
            'vInisial_brand',
            'vNama_brand',
            // 'vRowStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
