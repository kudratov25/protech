<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Services;

/**
 * ServicesSearch represents the model behind the search form of `app\models\Services`.
 */
class ServicesSearch extends Services
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'isHome'], 'integer'],
            [['short_description_ru', 'short_description_uz', 'short_description_en', 'image_bg', 'title_ru', 'title_uz', 'title_en', 'image_main', 'text_ru', 'text_uz', 'text_en', 'text_full_ru', 'text_full_uz', 'text_full_en', 'created_at'], 'safe'],
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
        $query = Services::find();

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
            'isHome' => $this->isHome,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'short_description_ru', $this->short_description_ru])
            ->andFilterWhere(['like', 'short_description_uz', $this->short_description_uz])
            ->andFilterWhere(['like', 'short_description_en', $this->short_description_en])
            ->andFilterWhere(['like', 'image_bg', $this->image_bg])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'image_main', $this->image_main])
            ->andFilterWhere(['like', 'text_ru', $this->text_ru])
            ->andFilterWhere(['like', 'text_uz', $this->text_uz])
            ->andFilterWhere(['like', 'text_en', $this->text_en])
            ->andFilterWhere(['like', 'text_full_ru', $this->text_full_ru])
            ->andFilterWhere(['like', 'text_full_uz', $this->text_full_uz])
            ->andFilterWhere(['like', 'text_full_en', $this->text_full_en]);

        return $dataProvider;
    }
}
