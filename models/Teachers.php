<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Teachers".
 *
 * @property int $id
 * @property string $name
 * @property string $patronymic
 * @property string $surname
 * @property string $updated_at
 *
 * @property Schedule[] $schedules
 * @property Schedule[] $schedules0
 * @property Schedule[] $schedules1
 * @property Schedule[] $schedules2
 * @property Schedule[] $schedules3
 * @property Schedule[] $schedules4
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Teachers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'patronymic', 'surname'], 'required'],
            [['updated_at'], 'safe'],
            [['name', 'patronymic', 'surname'], 'string', 'max' => 20],
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
            'patronymic' => 'Patronymic',
            'surname' => 'Surname',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['session_1_teacher' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules0()
    {
        return $this->hasMany(Schedule::className(), ['session_2_teacher' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules1()
    {
        return $this->hasMany(Schedule::className(), ['session_3_teacher' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules2()
    {
        return $this->hasMany(Schedule::className(), ['session_4_teacher' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules3()
    {
        return $this->hasMany(Schedule::className(), ['session_5_teacher' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules4()
    {
        return $this->hasMany(Schedule::className(), ['session_6_teacher' => 'id']);
    }
}
