<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ventas_detalle".
 *
 * @property int $id_venta_detalle
 * @property int|null $id_ventas
 * @property int|null $id_user
 * @property int|null $id_factura
 * @property string|null $fecha
 * @property int|null $id_producto
 * @property int|null $cantidad
 * @property float|null $precio_compra
 * @property float|null $precio_venta
 * @property float|null $subtotal
 */
class VentasDetalle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ventas_detalle';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_venta_detalle'], 'required'],
            [['id_venta_detalle', 'id_ventas', 'id_user', 'id_factura', 'id_producto', 'cantidad'], 'integer'],
            [['fecha'], 'safe'],
            [['precio_compra', 'precio_venta', 'subtotal'], 'number'],
            [['id_venta_detalle'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_venta_detalle' => 'Id Venta Detalle',
            'id_ventas' => 'Id Ventas',
            'id_user' => 'Id User',
            'id_factura' => 'Id Factura',
            'fecha' => 'Fecha',
            'id_producto' => 'Id Producto',
            'cantidad' => 'Cantidad',
            'precio_compra' => 'Precio Compra',
            'precio_venta' => 'Precio Venta',
            'subtotal' => 'Subtotal',
        ];
    }
}
