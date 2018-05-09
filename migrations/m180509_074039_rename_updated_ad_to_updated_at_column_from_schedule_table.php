<?php

use yii\db\Migration;

/**
 * Class m180509_074039_rename_updated_ad_to_updated_at_column_from_schedule_table
 */
class m180509_074039_rename_updated_ad_to_updated_at_column_from_schedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn("schedule", "updated_ad", "updated_at");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->renameColumn("schedule", "updated_at", "updated_ad");
    }
}
