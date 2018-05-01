<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Schedule`.
 * Has foreign keys to the tables:
 *
 * - `Groups`
 * - `Disciplines`
 * - `Teachers`
 * - `Disciplines`
 * - `Teachers`
 * - `Disciplines`
 * - `Teachers`
 * - `Disciplines`
 * - `Teachers`
 * - `Disciplines`
 * - `Teachers`
 * - `Disciplines`
 * - `Teachers`
 * - `Rooms`
 */
class m180501_173111_create_Schedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Schedule', [
            'id' => $this->primaryKey(),
            'for_the_day' => $this->timestamp()->notNull(),
            'for_the_group' => $this->integer()->notNull(),
            'session_1_discipline' => $this->integer()->notNull(),
            'session_1_teacher' => $this->integer()->notNull(),
            'session_2_discipline' => $this->integer()->notNull(),
            'session_2_teacher' => $this->integer()->notNull(),
            'session_3_discipline' => $this->integer()->notNull(),
            'session_3_teacher' => $this->integer()->notNull(),
            'session_4_discipline' => $this->integer()->notNull(),
            'session_4_teacher' => $this->integer()->notNull(),
            'session_5_discipline' => $this->integer()->notNull(),
            'session_5_teacher' => $this->integer()->notNull(),
            'session_6_discipline' => $this->integer()->notNull(),
            'session_6_teacher' => $this->integer()->notNull(),
            'name_room' => $this->integer()->notNull(),
            'updated_at'=>'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        // creates index for column `for_the_group`
        $this->createIndex(
            'idx-Schedule-for_the_group',
            'Schedule',
            'for_the_group'
        );

        // add foreign key for table `Groups`
        $this->addForeignKey(
            'fk-Schedule-for_the_group',
            'Schedule',
            'for_the_group',
            'Groups',
            'id',
            'CASCADE'
        );

        // creates index for column `session_1_discipline`
        $this->createIndex(
            'idx-Schedule-session_1_discipline',
            'Schedule',
            'session_1_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-Schedule-session_1_discipline',
            'Schedule',
            'session_1_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_1_teacher`
        $this->createIndex(
            'idx-Schedule-session_1_teacher',
            'Schedule',
            'session_1_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-Schedule-session_1_teacher',
            'Schedule',
            'session_1_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_2_discipline`
        $this->createIndex(
            'idx-Schedule-session_2_discipline',
            'Schedule',
            'session_2_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-Schedule-session_2_discipline',
            'Schedule',
            'session_2_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_2_teacher`
        $this->createIndex(
            'idx-Schedule-session_2_teacher',
            'Schedule',
            'session_2_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-Schedule-session_2_teacher',
            'Schedule',
            'session_2_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_3_discipline`
        $this->createIndex(
            'idx-Schedule-session_3_discipline',
            'Schedule',
            'session_3_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-Schedule-session_3_discipline',
            'Schedule',
            'session_3_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_3_teacher`
        $this->createIndex(
            'idx-Schedule-session_3_teacher',
            'Schedule',
            'session_3_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-Schedule-session_3_teacher',
            'Schedule',
            'session_3_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_4_discipline`
        $this->createIndex(
            'idx-Schedule-session_4_discipline',
            'Schedule',
            'session_4_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-Schedule-session_4_discipline',
            'Schedule',
            'session_4_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_4_teacher`
        $this->createIndex(
            'idx-Schedule-session_4_teacher',
            'Schedule',
            'session_4_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-Schedule-session_4_teacher',
            'Schedule',
            'session_4_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_5_discipline`
        $this->createIndex(
            'idx-Schedule-session_5_discipline',
            'Schedule',
            'session_5_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-Schedule-session_5_discipline',
            'Schedule',
            'session_5_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_5_teacher`
        $this->createIndex(
            'idx-Schedule-session_5_teacher',
            'Schedule',
            'session_5_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-Schedule-session_5_teacher',
            'Schedule',
            'session_5_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_6_discipline`
        $this->createIndex(
            'idx-Schedule-session_6_discipline',
            'Schedule',
            'session_6_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-Schedule-session_6_discipline',
            'Schedule',
            'session_6_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_6_teacher`
        $this->createIndex(
            'idx-Schedule-session_6_teacher',
            'Schedule',
            'session_6_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-Schedule-session_6_teacher',
            'Schedule',
            'session_6_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `name_room`
        $this->createIndex(
            'idx-Schedule-name_room',
            'Schedule',
            'name_room'
        );

        // add foreign key for table `Rooms`
        $this->addForeignKey(
            'fk-Schedule-name_room',
            'Schedule',
            'name_room',
            'Rooms',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `Groups`
        $this->dropForeignKey(
            'fk-Schedule-for_the_group',
            'Schedule'
        );

        // drops index for column `for_the_group`
        $this->dropIndex(
            'idx-Schedule-for_the_group',
            'Schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-Schedule-session_1_discipline',
            'Schedule'
        );

        // drops index for column `session_1_discipline`
        $this->dropIndex(
            'idx-Schedule-session_1_discipline',
            'Schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-Schedule-session_1_teacher',
            'Schedule'
        );

        // drops index for column `session_1_teacher`
        $this->dropIndex(
            'idx-Schedule-session_1_teacher',
            'Schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-Schedule-session_2_discipline',
            'Schedule'
        );

        // drops index for column `session_2_discipline`
        $this->dropIndex(
            'idx-Schedule-session_2_discipline',
            'Schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-Schedule-session_2_teacher',
            'Schedule'
        );

        // drops index for column `session_2_teacher`
        $this->dropIndex(
            'idx-Schedule-session_2_teacher',
            'Schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-Schedule-session_3_discipline',
            'Schedule'
        );

        // drops index for column `session_3_discipline`
        $this->dropIndex(
            'idx-Schedule-session_3_discipline',
            'Schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-Schedule-session_3_teacher',
            'Schedule'
        );

        // drops index for column `session_3_teacher`
        $this->dropIndex(
            'idx-Schedule-session_3_teacher',
            'Schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-Schedule-session_4_discipline',
            'Schedule'
        );

        // drops index for column `session_4_discipline`
        $this->dropIndex(
            'idx-Schedule-session_4_discipline',
            'Schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-Schedule-session_4_teacher',
            'Schedule'
        );

        // drops index for column `session_4_teacher`
        $this->dropIndex(
            'idx-Schedule-session_4_teacher',
            'Schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-Schedule-session_5_discipline',
            'Schedule'
        );

        // drops index for column `session_5_discipline`
        $this->dropIndex(
            'idx-Schedule-session_5_discipline',
            'Schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-Schedule-session_5_teacher',
            'Schedule'
        );

        // drops index for column `session_5_teacher`
        $this->dropIndex(
            'idx-Schedule-session_5_teacher',
            'Schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-Schedule-session_6_discipline',
            'Schedule'
        );

        // drops index for column `session_6_discipline`
        $this->dropIndex(
            'idx-Schedule-session_6_discipline',
            'Schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-Schedule-session_6_teacher',
            'Schedule'
        );

        // drops index for column `session_6_teacher`
        $this->dropIndex(
            'idx-Schedule-session_6_teacher',
            'Schedule'
        );

        // drops foreign key for table `Rooms`
        $this->dropForeignKey(
            'fk-Schedule-name_room',
            'Schedule'
        );

        // drops index for column `name_room`
        $this->dropIndex(
            'idx-Schedule-name_room',
            'Schedule'
        );

        $this->dropTable('Schedule');
    }
}
