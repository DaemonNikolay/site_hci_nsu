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
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'for_the_group', 'session_1_discipline', 'session_1_teacher', 'session_2_discipline', 'session_2_teacher', 'session_3_discipline', 'session_3_teacher', 'session_4_discipline', 'session_4_teacher', 'session_5_discipline', 'session_5_teacher', 'session_6_discipline', 'session_6_teacher', 'name_room'], 'integer'],
            [['for_the_day', 'updated_at'], 'safe'],
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
            'id' => $this->id,
            'for_the_day' => $this->for_the_day,
            'for_the_group' => $this->for_the_group,
            'session_1_discipline' => $this->session_1_discipline,
            'session_1_teacher' => $this->session_1_teacher,
            'session_2_discipline' => $this->session_2_discipline,
            'session_2_teacher' => $this->session_2_teacher,
            'session_3_discipline' => $this->session_3_discipline,
            'session_3_teacher' => $this->session_3_teacher,
            'session_4_discipline' => $this->session_4_discipline,
            'session_4_teacher' => $this->session_4_teacher,
            'session_5_discipline' => $this->session_5_discipline,
            'session_5_teacher' => $this->session_5_teacher,
            'session_6_discipline' => $this->session_6_discipline,
            'session_6_teacher' => $this->session_6_teacher,
            'name_room' => $this->name_room,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}