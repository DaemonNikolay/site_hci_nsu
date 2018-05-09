<?php

use yii\db\Migration;

/**
 * Class m180509_073319_alter_for_the_day_column
 */
class m180509_073319_alter_for_the_day_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn("schedule", "for_the_day", "datetime");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn("schedule", "for_the_day", "integer");
    }
}
