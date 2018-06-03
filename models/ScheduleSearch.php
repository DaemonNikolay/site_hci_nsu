<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Schedule;

/**
 * ScheduleSearch represents the model behind the search form of `app\models\Schedule`.
 */
class ScheduleSearch extends Schedule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['training_group', 'session_1_discipline', 'session_1_teacher', 'session_1_room', 'session_2_discipline', 'session_2_teacher', 'session_2_room', 'session_3_discipline', 'session_3_teacher', 'session_3_room', 'session_4_discipline', 'session_4_teacher', 'session_4_room', 'session_5_discipline', 'session_5_teacher', 'session_5_room', 'session_6_discipline', 'session_6_teacher', 'session_6_room'], 'integer'],
            [['day_of_week', 'status_week', 'updated_at'], 'safe'],
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
        $query = Schedule::find();

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
            'training_group' => $this->training_group,
            'session_1_discipline' => $this->session_1_discipline,
            'session_1_teacher' => $this->session_1_teacher,
            'session_1_room' => $this->session_1_room,
            'session_2_discipline' => $this->session_2_discipline,
            'session_2_teacher' => $this->session_2_teacher,
            'session_2_room' => $this->session_2_room,
            'session_3_discipline' => $this->session_3_discipline,
            'session_3_teacher' => $this->session_3_teacher,
            'session_3_room' => $this->session_3_room,
            'session_4_discipline' => $this->session_4_discipline,
            'session_4_teacher' => $this->session_4_teacher,
            'session_4_room' => $this->session_4_room,
            'session_5_discipline' => $this->session_5_discipline,
            'session_5_teacher' => $this->session_5_teacher,
            'session_5_room' => $this->session_5_room,
            'session_6_discipline' => $this->session_6_discipline,
            'session_6_teacher' => $this->session_6_teacher,
            'session_6_room' => $this->session_6_room,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'day_of_week', $this->day_of_week])
            ->andFilterWhere(['like', 'status_week', $this->status_week]);

        return $dataProvider;
    }
}
