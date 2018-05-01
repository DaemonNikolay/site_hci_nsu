<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Roles`.
 */
class m180501_164719_create_Roles_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Roles', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Roles');
    }
}
