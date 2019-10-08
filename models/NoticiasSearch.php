<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Noticias;

/**
 * NoticiasSearch represents the model behind the search form of `app\models\Noticias`.
 */
class NoticiasSearch extends Noticias
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_noticias', 'categoria_noticia', 'author_id', 'publicado'], 'integer'],
            [['titulo_noticia', 'body_noticia', 'fecha_noticia'], 'safe'],
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
        $query = Noticias::find()->joinWith('noticiasPrincipales')->orderBy([new \yii\db\Expression('-ranking DESC')]);

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
            'id_noticias' => $this->id_noticias,
            'fecha_noticia' => $this->fecha_noticia,
            'categoria_noticia' => $this->categoria_noticia,
            'author_id' => $this->author_id,
            'publicado' => $this->publicado,
        ]);

        $query->andFilterWhere(['like', 'titulo_noticia', $this->titulo_noticia])
            ->andFilterWhere(['like', 'body_noticia', $this->body_noticia]);

        return $dataProvider;
    }
}
