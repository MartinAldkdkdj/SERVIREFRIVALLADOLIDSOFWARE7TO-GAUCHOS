<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "productos".
 *
 * @property int $id_producto
 * @property string|null $codigo
 * @property string|null $descripcion
 * @property float|null $precio_compra
 * @property float|null $precio_venta
 * @property int|null $stock
 */
class Productos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_producto'], 'required'],
            [['id_producto', 'stock'], 'integer'],
            [['precio_compra', 'precio_venta'], 'number'],
            [['codigo'], 'string', 'max' => 50],
            [['descripcion'], 'string', 'max' => 255],
            [['id_producto'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_producto' => 'Id Producto',
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'precio_compra' => 'Precio Compra',
            'precio_venta' => 'Precio Venta',
            'stock' => 'Stock',
        ];
    }
}
