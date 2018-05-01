<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Groups`.
 */
class m180501_164247_create_Groups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Groups', [
            'id' => $this->primaryKey(),
            'name' => $this->string(10)->notNull(),
            'updated_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Groups');
    }
}
