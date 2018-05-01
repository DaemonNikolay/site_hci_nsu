<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Disciplines`.
 */
class m180501_172043_create_Disciplines_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Disciplines', [
            'id' => $this->primaryKey(),
            'name' => $this->string(150),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Disciplines');
    }
}
