<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\VentasDetalle $model */

$this->title = 'Create Ventas Detalle';
$this->params['breadcrumbs'][] = ['label' => 'Ventas Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ventas-detalle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
