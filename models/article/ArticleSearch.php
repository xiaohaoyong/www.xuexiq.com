<?php

namespace app\models\article;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\article\Article;

/**
 * ArticleSearch represents the model behind the search form about `app\models\article\Article`.
 */
class ArticleSearch extends Article
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'createtime', 'channel', 'cat', 'area', 'source', 'datas', 'level'], 'integer'],
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
        $query = Article::find();

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
            'createtime' => $this->createtime,
            'channel' => $this->channel,
            'cat' => $this->cat,
            'area' => $this->area,
            'source' => $this->source,
            'datas' => $this->datas,
            'level' => $this->level,
        ]);
        if(!isset($this->level)){
           $query->andFilterWhere(['>','level',-1]);
        }
        $query->orderBy([self::primaryKey()[0]=>SORT_DESC]);

        return $dataProvider;
    }
}
