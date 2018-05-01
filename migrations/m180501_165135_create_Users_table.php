<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Users`.
 * Has foreign keys to the tables:
 *
 * - `Roles`
 */
class m180501_165135_create_Users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Users', [
            'id' => $this->primaryKey(),
            'login' => $this->string(255),
            'password' => $this->string(255),
            'role' => $this->integer()->notNull(),
        ]);

        // creates index for column `role`
        $this->createIndex(
            'idx-Users-role',
            'Users',
            'role'
        );

        // add foreign key for table `Roles`
        $this->addForeignKey(
            'fk-Users-role',
            'Users',
            'role',
            'Roles',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `Roles`
        $this->dropForeignKey(
            'fk-Users-role',
            'Users'
        );

        // drops index for column `role`
        $this->dropIndex(
            'idx-Users-role',
            'Users'
        );

        $this->dropTable('Users');
    }
}
