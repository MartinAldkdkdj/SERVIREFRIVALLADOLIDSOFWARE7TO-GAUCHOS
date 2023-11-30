<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\search\VentasDetalle $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="ventas-detalle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_venta_detalle') ?>

    <?= $form->field($model, 'id_ventas') ?>

    <?= $form->field($model, 'id_user') ?>

    <?= $form->field($model, 'id_factura') ?>

    <?= $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'id_producto') ?>

    <?php // echo $form->field($model, 'cantidad') ?>

    <?php // echo $form->field($model, 'precio_compra') ?>

    <?php // echo $form->field($model, 'precio_venta') ?>

    <?php // echo $form->field($model, 'subtotal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
