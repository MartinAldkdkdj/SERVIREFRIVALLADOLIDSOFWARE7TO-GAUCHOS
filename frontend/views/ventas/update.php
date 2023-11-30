<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Ventas $model */

$this->title = 'Update Ventas: ' . $model->id_ventas;
$this->params['breadcrumbs'][] = ['label' => 'Ventas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ventas, 'url' => ['view', 'id_ventas' => $model->id_ventas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ventas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
