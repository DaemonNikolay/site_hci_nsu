<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id
 * @property int $for_the_day
 * @property int $for_the_group
 * @property int $session_1_discipline
 * @property int $session_1_teacher
 * @property int $session_1_room
 * @property int $session_2_discipline
 * @property int $session_2_teacher
 * @property int $session_2_room
 * @property int $session_3_discipline
 * @property int $session_3_teacher
 * @property int $session_3_room
 * @property int $session_4_discipline
 * @property int $session_4_teacher
 * @property int $session_4_room
 * @property int $session_5_discipline
 * @property int $session_5_teacher
 * @property int $session_5_room
 * @property int $session_6_discipline
 * @property int $session_6_teacher
 * @property int $session_6_room
 * @property int $updated_ad
 *
 * @property Groups $forTheGroup
 * @property Disciplines $session1Discipline
 * @property Rooms $session1Room
 * @property Teachers $session1Teacher
 * @property Disciplines $session2Discipline
 * @property Rooms $session2Room
 * @property Teachers $session2Teacher
 * @property Disciplines $session3Discipline
 * @property Rooms $session3Room
 * @property Teachers $session3Teacher
 * @property Disciplines $session4Discipline
 * @property Rooms $session4Room
 * @property Teachers $session4Teacher
 * @property Disciplines $session5Discipline
 * @property Rooms $session5Room
 * @property Teachers $session5Teacher
 * @property Disciplines $session6Discipline
 * @property Rooms $session6Room
 * @property Teachers $session6Teacher
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['for_the_day', 'for_the_group', 'session_1_discipline', 'session_1_teacher', 'session_1_room', 'session_2_discipline', 'session_2_teacher', 'session_2_room', 'session_3_discipline', 'session_3_teacher', 'session_3_room', 'session_4_discipline', 'session_4_teacher', 'session_4_room', 'session_5_discipline', 'session_5_teacher', 'session_5_room', 'session_6_discipline', 'session_6_teacher', 'session_6_room', 'updated_ad'], 'integer'],
            [['for_the_group'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['for_the_group' => 'id']],
            [['session_1_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_1_discipline' => 'id']],
            [['session_1_room'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['session_1_room' => 'id']],
            [['session_1_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_1_teacher' => 'id']],
            [['session_2_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_2_discipline' => 'id']],
            [['session_2_room'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['session_2_room' => 'id']],
            [['session_2_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_2_teacher' => 'id']],
            [['session_3_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_3_discipline' => 'id']],
            [['session_3_room'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['session_3_room' => 'id']],
            [['session_3_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_3_teacher' => 'id']],
            [['session_4_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_4_discipline' => 'id']],
            [['session_4_room'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['session_4_room' => 'id']],
            [['session_4_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_4_teacher' => 'id']],
            [['session_5_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_5_discipline' => 'id']],
            [['session_5_room'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['session_5_room' => 'id']],
            [['session_5_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_5_teacher' => 'id']],
            [['session_6_discipline'], 'exist', 'skipOnError' => true, 'targetClass' => Disciplines::className(), 'targetAttribute' => ['session_6_discipline' => 'id']],
            [['session_6_room'], 'exist', 'skipOnError' => true, 'targetClass' => Rooms::className(), 'targetAttribute' => ['session_6_room' => 'id']],
            [['session_6_teacher'], 'exist', 'skipOnError' => true, 'targetClass' => Teachers::className(), 'targetAttribute' => ['session_6_teacher' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'for_the_day' => 'For The Day',
            'for_the_group' => 'For The Group',
            'session_1_discipline' => 'Session 1 Discipline',
            'session_1_teacher' => 'Session 1 Teacher',
            'session_1_room' => 'Session 1 Room',
            'session_2_discipline' => 'Session 2 Discipline',
            'session_2_teacher' => 'Session 2 Teacher',
            'session_2_room' => 'Session 2 Room',
            'session_3_discipline' => 'Session 3 Discipline',
            'session_3_teacher' => 'Session 3 Teacher',
            'session_3_room' => 'Session 3 Room',
            'session_4_discipline' => 'Session 4 Discipline',
            'session_4_teacher' => 'Session 4 Teacher',
            'session_4_room' => 'Session 4 Room',
            'session_5_discipline' => 'Session 5 Discipline',
            'session_5_teacher' => 'Session 5 Teacher',
            'session_5_room' => 'Session 5 Room',
            'session_6_discipline' => 'Session 6 Discipline',
            'session_6_teacher' => 'Session 6 Teacher',
            'session_6_room' => 'Session 6 Room',
            'updated_ad' => 'Updated Ad',
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
    public function getSession1Discipline()
    {
        return $this->hasOne(Disciplines::className(), ['id' => 'session_1_discipline']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession1Room()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'session_1_room']);
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
    public function getSession2Room()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'session_2_room']);
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
    public function getSession3Room()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'session_3_room']);
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
    public function getSession4Room()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'session_4_room']);
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
    public function getSession5Room()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'session_5_room']);
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
    public function getSession6Room()
    {
        return $this->hasOne(Rooms::className(), ['id' => 'session_6_room']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSession6Teacher()
    {
        return $this->hasOne(Teachers::className(), ['id' => 'session_6_teacher']);
    }
}
