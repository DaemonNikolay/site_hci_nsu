<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Teachers`.
 */
class m180501_163234_create_Teachers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Teachers', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20)->notNull(),
            'patronymic' => $this->string(20)->notNull(),
            'surname' => $this->string(20)->notNull(),
            'updated_at'=> 'timestamp DEFAULT current_timestamp ON UPDATE current_timestamp',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Teachers');
    }
}
