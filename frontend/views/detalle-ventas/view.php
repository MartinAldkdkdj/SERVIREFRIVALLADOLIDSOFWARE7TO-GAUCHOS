<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\VentasDetalle $model */

$this->title = $model->id_venta_detalle;
$this->params['breadcrumbs'][] = ['label' => 'Ventas Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ventas-detalle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_venta_detalle' => $model->id_venta_detalle], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_venta_detalle' => $model->id_venta_detalle], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_venta_detalle',
            'id_ventas',
            'id_user',
            'id_factura',
            'fecha',
            'id_producto',
            'cantidad',
            'precio_compra',
            'precio_venta',
            'subtotal',
        ],
    ]) ?>

</div>
