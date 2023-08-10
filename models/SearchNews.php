<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\News;

/**
 * SearchNews represents the model behind the search form of `app\models\News`.
 */
class SearchNews extends News
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title_ru', 'title_uz', 'title_en', 'banner_text_ru', 'banner_text_uz', 'banner_text_en', 'image_banner', 'full_text_ru', 'full_text_uz', 'full_text_en', 'created_at'], 'safe'],
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
        $query = News::find();

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
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'banner_text_ru', $this->banner_text_ru])
            ->andFilterWhere(['like', 'banner_text_uz', $this->banner_text_uz])
            ->andFilterWhere(['like', 'banner_text_en', $this->banner_text_en])
            ->andFilterWhere(['like', 'image_banner', $this->image_banner])
            ->andFilterWhere(['like', 'full_text_ru', $this->full_text_ru])
            ->andFilterWhere(['like', 'full_text_uz', $this->full_text_uz])
            ->andFilterWhere(['like', 'full_text_en', $this->full_text_en]);

        return $dataProvider;
    }
}
