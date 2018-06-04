<?php

use yii\db\Migration;

/**
 * Handles the creation of table `memes`.
 */
class m180603_194301_create_memes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('memes', [
            'id' => $this->primaryKey(),
            'url' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('memes');
    }
}
