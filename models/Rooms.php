<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Rooms".
 *
 * @property int $id
 * @property string $name
 * @property string $type
 * @property string $updated_at
 *
 * @property Schedule[] $schedules
 */
class Rooms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Rooms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['type'], 'string'],
            [['updated_at'], 'safe'],
            [['name'], 'string', 'max' => 5],
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
            'type' => 'Type',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['name_room' => 'id']);
    }
}
