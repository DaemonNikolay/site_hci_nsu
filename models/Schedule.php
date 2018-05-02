<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Schedule".
 *
 * @property int $id
 * @property string $for_the_day
 * @property int $for_the_group
 * @property int $session_1_discipline
 * @property int $session_1_teacher
 * @property int $session_2_discipline
 * @property int $session_2_teacher
 * @property int $session_3_discipline
 * @property int $session_3_teacher
 * @property int $session_4_discipline
 * @property int $session_4_teacher
 * @property int $session_5_discipline
 * @property int $session_5_teacher
 * @property int $session_6_discipline
 * @property int $session_6_teacher
 * @property int $name_room
 * @property string $updated_at
 *
 * @property Groups $forTheGroup
 * @property Rooms $nameRoom
 * @property Disciplines $session1Discipline
 * @property Teachers $session1Teacher
 * @property Disciplines $session2Discipline
 * @property Teachers $session2Teacher
 * @property Disciplines $session3Discipline
 * @property Teachers $session3Teacher
 * @property Disciplines $session4Discipline
 * @property Teachers $session4Teacher
 * @property Disciplines $session5Discipline
 * @property Teachers $session5Teacher
 * @property Disciplines $session6Discipline
 * @property Teachers $session6Teacher
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['for_the_day', 'for_the_group', 'session_1_discipline', 'session_1_teacher', 'session_2_discipline', 'session_2_teacher', 'session_3_discipline', 'session_3_teacher', 'session_4_discipline', 'session_4_teacher', 'session_5_discipline', 'session_5_teacher', 'session_6_discipline', 'session_6_teacher', 'name_room'], 'required'],
            [['for_the_day', 'updated_at'], 'safe'],
            [['for_the_group', 'session_1_discipline', 'session_1_teacher', 'session_2_discipline', 'session_2_teacher', 'session_3_discipline', 'session_3_teacher', 'session_4_discipline', 'session_4_teacher', 'session_5_discipline', 'session_5_teacher', 'session_6_discipline', 'session_6_teacher', 'name_room'], 'integer'],
            [['for_the_group'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['for_the_group' => 'id']],
            [['name_room'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['name_room' => 'id']],
            [['session_1_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_1_discipline' => 'id']],
            [['session_1_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_1_teacher' => 'id']],
            [['session_2_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_2_discipline' => 'id']],
            [['session_2_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_2_teacher' => 'id']],
            [['session_3_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_3_discipline' => 'id']],
            [['session_3_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_3_teacher' => 'id']],
            [['session_4_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_4_discipline' => 'id']],
            [['session_4_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_4_teacher' => 'id']],
            [['session_5_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_5_discipline' => 'id']],
            [['session_5_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_5_teacher' => 'id']],
            [['session_6_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_6_discipline' => 'id']],
            [['session_6_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_6_teacher' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'for_the_day' => 'For The Day',
            'for_the_group' => 'For The Group',
            'session_1_discipline' => 'Session 1 Discipline',
            'session_1_teacher' => 'Session 1 Teacher',
            'session_2_discipline' => 'Session 2 Discipline',
            'session_2_teacher' => 'Session 2 Teacher',
            'session_3_discipline' => 'Session 3 Discipline',
            'session_3_teacher' => 'Session 3 Teacher',
            'session_4_discipline' => 'Session 4 Discipline',
            'session_4_teacher' => 'Session 4 Teacher',
            'session_5_discipline' => 'Session 5 Discipline',
            'session_5_teacher' => 'Session 5 Teacher',
            'session_6_discipline' => 'Session 6 Discipline',
            'session_6_teacher' => 'Session 6 Teacher',
            'name_room' => 'Name Room',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForTheGroup()
    {
        return $this->hasOne(Groups::className(), ['id' => 'for_the_group']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNameRoom()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'name_room']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession1Discipline()
    {
        return $this->hasOne(Disciplines::className(), ['id' => 'session_1_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession1Teacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'session_1_teacher']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession2Discipline()
    {
        return $this->hasOne(Disciplines::className(), ['id' => 'session_2_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession2Teacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'session_2_teacher']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession3Discipline()
    {
        return $this->hasOne(Disciplines::className(), ['id' => 'session_3_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession3Teacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'session_3_teacher']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession4Discipline()
    {
        return $this->hasOne(Disciplines::className(), ['id' => 'session_4_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession4Teacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'session_4_teacher']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession5Discipline()
    {
        return $this->hasOne(Disciplines::className(), ['id' => 'session_5_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession5Teacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'session_5_teacher']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession6Discipline()
    {
        return $this->hasOne(Disciplines::className(), ['id' => 'session_6_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession6Teacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'session_6_teacher']);
    }
}
