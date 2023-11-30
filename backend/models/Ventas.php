<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ventas".
 *
 * @property int $id_ventas
 * @property string|null $fecha
 * @property int|null $factura
 * @property int|null $id_user
 * @property float|null $total
 */
class Ventas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ventas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ventas'], 'required'],
            [['id_ventas', 'factura', 'id_user'], 'integer'],
            [['fecha'], 'safe'],
            [['total'], 'number'],
            [['id_ventas'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ventas' => 'Id Ventas',
            'fecha' => 'Fecha',
            'factura' => 'Factura',
            'id_user' => 'Id User',
            'total' => 'Total',
        ];
    }
}
