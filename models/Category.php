<?php

namespace app\models;

use Yii;
use yii\data\Pagination;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title
 *
 * @property Articles[] $articles
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [[['title'], 'required'],
                [['title'], 'string', 'max' => 255],];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return ['id' => 'ID',
                'title' => 'Title',];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['category' => 'id']);
    }

//    public static function getArticlesByCategory($id)
//    {
//        $query = Articles::find()->where(['id' => $id]);
//
//        $count = $query->count();
//        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => 6]);
//
//        $articles = $query->offset($pagination->offset)->limit($pagination->limit)->all();
//
//        $data['articles'] = $articles;
//        $data['pagination'] = $pagination;
//
//        return $data;
//    }

    public static function getArticlesByCategory()
    {
        $articles = Articles::find()->all();
        $data['articles'] = $articles;

        return $data;
    }
}
