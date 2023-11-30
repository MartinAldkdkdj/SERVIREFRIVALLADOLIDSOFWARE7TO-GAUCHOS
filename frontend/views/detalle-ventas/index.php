<?php

use frontend\models\VentasDetalle;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\search\VentasDetalle $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ventas Detalles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventas-detalle-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ventas Detalle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_venta_detalle',
            'id_ventas',
            'id_user',
            'id_factura',
            'fecha',
            //'id_producto',
            //'cantidad',
            //'precio_compra',
            //'precio_venta',
            //'subtotal',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, VentasDetalle $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_venta_detalle' => $model->id_venta_detalle]);
                 }
            ],
        ],
    ]); ?>


</div>
