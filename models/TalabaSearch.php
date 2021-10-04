<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Talaba;

/**
 * TalabaSearch represents the model behind the search form of `app\models\Talaba`.
 */
class TalabaSearch extends Talaba
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'region_id', 'district_id', 'fakultet_id', 'kurs_id', 'guruh_id', 'yunalish_id', 'edlang_id', 'edtype_id', 'bino_id', 'qavat_id', 'xona_id'], 'integer'],
            [['ism', 'familiya', 'otasining_ismi'], 'safe'],
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
        $query = Talaba::find();

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
            'region_id' => $this->region_id,
            'district_id' => $this->district_id,
            'fakultet_id' => $this->fakultet_id,
            'kurs_id' => $this->kurs_id,
            'guruh_id' => $this->guruh_id,
            'yunalish_id' => $this->yunalish_id,
            'edlang_id' => $this->edlang_id,
            'edtype_id' => $this->edtype_id,
            'bino_id' => $this->bino_id,
            'qavat_id' => $this->qavat_id,
            'xona_id' => $this->xona_id,
        ]);

        $query->andFilterWhere(['like', 'ism', $this->ism])
            ->andFilterWhere(['like', 'familiya', $this->familiya])
            ->andFilterWhere(['like', 'otasining_ismi', $this->otasining_ismi]);

        return $dataProvider;
    }
}
