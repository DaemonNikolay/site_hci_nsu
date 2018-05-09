<?php

use yii\db\Migration;

/**
 * Class m180509_074130_alter_updated_at_column_from_schedule
 */
class m180509_074130_alter_updated_at_column_from_schedule extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn("schedule", "updated_at", "datetime");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn("schedule", "updated_at", "integer");
    }
}
