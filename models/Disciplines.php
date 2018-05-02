<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Disciplines".
 *
 * @property int $id
 * @property string $name
 *
 * @property Schedule[] $schedules
 * @property Schedule[] $schedules0
 * @property Schedule[] $schedules1
 * @property Schedule[] $schedules2
 * @property Schedule[] $schedules3
 * @property Schedule[] $schedules4
 */
class Disciplines extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Disciplines';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['session_1_discipline' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules0()
    {
        return $this->hasMany(Schedule::className(), ['session_2_discipline' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules1()
    {
        return $this->hasMany(Schedule::className(), ['session_3_discipline' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules2()
    {
        return $this->hasMany(Schedule::className(), ['session_4_discipline' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules3()
    {
        return $this->hasMany(Schedule::className(), ['session_5_discipline' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules4()
    {
        return $this->hasMany(Schedule::className(), ['session_6_discipline' => 'id']);
    }
}
