<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Hoodies;

/**
 * HoodiesSearch represents the model behind the search form of `app\models\Hoodies`.
 */
class HoodiesSearch extends Hoodies
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'articul_product', 'color_id'], 'integer'],
            [['name', 'description', 'description_two', 'name_style', 'name_material', 'name_print_thematick1', 'name_print_thematick2', 'name_print_thematick3', 'name_print_place', 'name_gender'], 'safe'],
            [['price'], 'number'],
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
        $query = Hoodies::find();

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
            'id' => $this->id,
            'articul_product' => $this->articul_product,
            'price' => $this->price,
            'color_id' => $this->color_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'description_two', $this->description_two])
            ->andFilterWhere(['like', 'name_style', $this->name_style])
            ->andFilterWhere(['like', 'name_material', $this->name_material])
            ->andFilterWhere(['like', 'name_print_thematick1', $this->name_print_thematick1])
            ->andFilterWhere(['like', 'name_print_thematick2', $this->name_print_thematick2])
            ->andFilterWhere(['like', 'name_print_thematick3', $this->name_print_thematick3])
            ->andFilterWhere(['like', 'name_print_place', $this->name_print_place])
            ->andFilterWhere(['like', 'name_gender', $this->name_gender]);

        return $dataProvider;
    }
}
