<?php

use yii\db\Migration;

/**
 * Handles the creation of table `articles`.
 * Has foreign keys to the tables:
 *
 * - `category`
 */
class m180527_191359_create_articles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'content' => $this->string()->notNull(),
            'date' => $this->date(),
            'image' => $this->string(),
            'viewed' => $this->integer(),
            'category' => $this->integer(),
        ]);

        // creates index for column `category`
        $this->createIndex(
            'idx-articles-category',
            'articles',
            'category'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-articles-category',
            'articles',
            'category',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `category`
        $this->dropForeignKey(
            'fk-articles-category',
            'articles'
        );

        // drops index for column `category`
        $this->dropIndex(
            'idx-articles-category',
            'articles'
        );

        $this->dropTable('articles');
    }
}
