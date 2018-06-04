<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "memes".
 *
 * @property int $id
 * @property string $url
 */
class Memes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'memes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [[['url'], 'file', 'extensions' => 'png, jpg'],];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return ['id' => 'ID',
                'url' => 'Url',];
    }
}
