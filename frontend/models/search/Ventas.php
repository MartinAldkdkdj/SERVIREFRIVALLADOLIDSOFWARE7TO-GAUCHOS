<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ventas as VentasModel;

/**
 * Ventas represents the model behind the search form of `frontend\models\Ventas`.
 */
class Ventas extends VentasModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ventas', 'factura', 'id_user'], 'integer'],
            [['fecha'], 'safe'],
            [['total'], 'number'],
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
        $query = VentasModel::find();

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
            'id_ventas' => $this->id_ventas,
            'fecha' => $this->fecha,
            'factura' => $this->factura,
            'id_user' => $this->id_user,
            'total' => $this->total,
        ]);

        return $dataProvider;
    }
}
