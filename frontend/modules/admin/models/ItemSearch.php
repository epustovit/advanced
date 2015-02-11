<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Items;

/**
 * ItemSearch represents the model behind the search form about `app\models\Items`.
 */
class ItemSearch extends Items
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Item_ID', 'Category_ID'], 'integer'],
            [['Name', 'Description', 'PhotoPath'], 'safe'],
            [['Price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Items::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Item_ID' => $this->Item_ID,
            'Price' => $this->Price,
            'Category_ID' => $this->Category_ID,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'PhotoPath', $this->PhotoPath]);

        return $dataProvider;
    }
}
