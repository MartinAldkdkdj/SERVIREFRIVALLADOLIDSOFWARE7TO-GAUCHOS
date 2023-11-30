<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\VentasDetalle as VentasDetalleModel;

/**
 * VentasDetalle represents the model behind the search form of `frontend\models\VentasDetalle`.
 */
class VentasDetalle extends VentasDetalleModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_venta_detalle', 'id_ventas', 'id_user', 'id_factura', 'id_producto', 'cantidad'], 'integer'],
            [['fecha'], 'safe'],
            [['precio_compra', 'precio_venta', 'subtotal'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = VentasDetalleModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_venta_detalle' => $this->id_venta_detalle,
            'id_ventas' => $this->id_ventas,
            'id_user' => $this->id_user,
            'id_factura' => $this->id_factura,
            'fecha' => $this->fecha,
            'id_producto' => $this->id_producto,
            'cantidad' => $this->cantidad,
            'precio_compra' => $this->precio_compra,
            'precio_venta' => $this->precio_venta,
            'subtotal' => $this->subtotal,
        ]);

        return $dataProvider;
    }
}
