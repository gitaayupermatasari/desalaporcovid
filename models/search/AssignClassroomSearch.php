<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AssignClassroomModel;

/**
 * AssignClassroomSearch represents the model behind the search form of `app\models\AssignClassroomModel`.
 */
class AssignClassroomSearch extends AssignClassroomModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'classroom_id', 'student_id', 'status','school_id'], 'integer'],
            [['year','semester'], 'safe'],
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
        $query = AssignClassroomModel::find();

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
            'classroom_id' => $this->classroom_id,
            'student_id' => $this->student_id,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
