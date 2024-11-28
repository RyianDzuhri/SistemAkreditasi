<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AkreditasiProdi;

/**
 * AkreditasiProdiSearch represents the model behind the search form of `app\models\AkreditasiProdi`.
 */
class AkreditasiProdiSearch extends AkreditasiProdi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_akreditasi', 'id_prodi', 'id_la'], 'integer'],
            [['histori_akreditasi', 'tgl_mulai', 'tgl_berakhir'], 'safe'],
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
        $query = AkreditasiProdi::find();

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
            'id_akreditasi' => $this->id_akreditasi,
            'id_prodi' => $this->id_prodi,
            'id_la' => $this->id_la,
            'tgl_mulai' => $this->tgl_mulai,
            'tgl_berakhir' => $this->tgl_berakhir,
        ]);

        $query->andFilterWhere(['like', 'histori_akreditasi', $this->histori_akreditasi]);

        return $dataProvider;
    }
}
