<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `schedule`.
 */
class m180601_120753_drop_schedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('schedule');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('schedule', [
            'id' => $this->primaryKey(),
        ]);
    }
}
