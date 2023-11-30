<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\VentasDetalle $model */

$this->title = 'Update Ventas Detalle: ' . $model->id_venta_detalle;
$this->params['breadcrumbs'][] = ['label' => 'Ventas Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_venta_detalle, 'url' => ['view', 'id_venta_detalle' => $model->id_venta_detalle]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ventas-detalle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
