<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Groups".
 *
 * @property int $id
 * @property string $name
 * @property string $updated_at
 *
 * @property Schedule[] $schedules
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['updated_at'], 'safe'],
            [['name'], 'string', 'max' => 10],
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
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSchedules()
    {
        return $this->hasMany(Schedule::className(), ['for_the_group' => 'id']);
    }
}
