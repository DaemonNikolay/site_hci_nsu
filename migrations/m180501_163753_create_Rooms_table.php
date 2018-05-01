<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Rooms`.
 */
class m180501_163753_create_Rooms_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Rooms', [
            'id' => $this->primaryKey(),
            'name' => $this->string(5)->notNull(),
            'type' => 'ENUM("classic","lecture","computer") NOT NULL DEFAULT "classic"',
            'updated_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Rooms');
    }
}
