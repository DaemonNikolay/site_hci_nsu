<?php

use yii\db\Migration;

/**
 * Handles the creation of table `schedule`.
 * Has foreign keys to the tables:
 *
 * - `Groups`
 * - `Disciplines`
 * - `Teachers`
 * - `Rooms`
 * - `Disciplines`
 * - `Teachers`
 * - `Rooms`
 * - `Disciplines`
 * - `Teachers`
 * - `Rooms`
 * - `Disciplines`
 * - `Teachers`
 * - `Rooms`
 * - `Disciplines`
 * - `Teachers`
 * - `Rooms`
 * - `Disciplines`
 * - `Teachers`
 * - `Rooms`
 */
class m180509_045120_create_schedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('schedule', [
            'id' => $this->primaryKey(),
            'for_the_day' => $this->integer(),
            'for_the_group' => $this->integer(),
            'session_1_discipline' => $this->integer(),
            'session_1_teacher' => $this->integer(),
            'session_1_room' => $this->integer(),
            'session_2_discipline' => $this->integer(),
            'session_2_teacher' => $this->integer(),
            'session_2_room' => $this->integer(),
            'session_3_discipline' => $this->integer(),
            'session_3_teacher' => $this->integer(),
            'session_3_room' => $this->integer(),
            'session_4_discipline' => $this->integer(),
            'session_4_teacher' => $this->integer(),
            'session_4_room' => $this->integer(),
            'session_5_discipline' => $this->integer(),
            'session_5_teacher' => $this->integer(),
            'session_5_room' => $this->integer(),
            'session_6_discipline' => $this->integer(),
            'session_6_teacher' => $this->integer(),
            'session_6_room' => $this->integer(),
            'updated_ad' => $this->integer(),
        ]);

        // creates index for column `for_the_group`
        $this->createIndex(
            'idx-schedule-for_the_group',
            'schedule',
            'for_the_group'
        );

        // add foreign key for table `Groups`
        $this->addForeignKey(
            'fk-schedule-for_the_group',
            'schedule',
            'for_the_group',
            'Groups',
            'id',
            'CASCADE'
        );

        // creates index for column `session_1_discipline`
        $this->createIndex(
            'idx-schedule-session_1_discipline',
            'schedule',
            'session_1_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-schedule-session_1_discipline',
            'schedule',
            'session_1_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_1_teacher`
        $this->createIndex(
            'idx-schedule-session_1_teacher',
            'schedule',
            'session_1_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-schedule-session_1_teacher',
            'schedule',
            'session_1_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_1_room`
        $this->createIndex(
            'idx-schedule-session_1_room',
            'schedule',
            'session_1_room'
        );

        // add foreign key for table `Rooms`
        $this->addForeignKey(
            'fk-schedule-session_1_room',
            'schedule',
            'session_1_room',
            'Rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_2_discipline`
        $this->createIndex(
            'idx-schedule-session_2_discipline',
            'schedule',
            'session_2_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-schedule-session_2_discipline',
            'schedule',
            'session_2_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_2_teacher`
        $this->createIndex(
            'idx-schedule-session_2_teacher',
            'schedule',
            'session_2_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-schedule-session_2_teacher',
            'schedule',
            'session_2_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_2_room`
        $this->createIndex(
            'idx-schedule-session_2_room',
            'schedule',
            'session_2_room'
        );

        // add foreign key for table `Rooms`
        $this->addForeignKey(
            'fk-schedule-session_2_room',
            'schedule',
            'session_2_room',
            'Rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_3_discipline`
        $this->createIndex(
            'idx-schedule-session_3_discipline',
            'schedule',
            'session_3_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-schedule-session_3_discipline',
            'schedule',
            'session_3_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_3_teacher`
        $this->createIndex(
            'idx-schedule-session_3_teacher',
            'schedule',
            'session_3_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-schedule-session_3_teacher',
            'schedule',
            'session_3_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_3_room`
        $this->createIndex(
            'idx-schedule-session_3_room',
            'schedule',
            'session_3_room'
        );

        // add foreign key for table `Rooms`
        $this->addForeignKey(
            'fk-schedule-session_3_room',
            'schedule',
            'session_3_room',
            'Rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_4_discipline`
        $this->createIndex(
            'idx-schedule-session_4_discipline',
            'schedule',
            'session_4_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-schedule-session_4_discipline',
            'schedule',
            'session_4_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_4_teacher`
        $this->createIndex(
            'idx-schedule-session_4_teacher',
            'schedule',
            'session_4_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-schedule-session_4_teacher',
            'schedule',
            'session_4_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_4_room`
        $this->createIndex(
            'idx-schedule-session_4_room',
            'schedule',
            'session_4_room'
        );

        // add foreign key for table `Rooms`
        $this->addForeignKey(
            'fk-schedule-session_4_room',
            'schedule',
            'session_4_room',
            'Rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_5_discipline`
        $this->createIndex(
            'idx-schedule-session_5_discipline',
            'schedule',
            'session_5_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-schedule-session_5_discipline',
            'schedule',
            'session_5_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_5_teacher`
        $this->createIndex(
            'idx-schedule-session_5_teacher',
            'schedule',
            'session_5_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-schedule-session_5_teacher',
            'schedule',
            'session_5_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_5_room`
        $this->createIndex(
            'idx-schedule-session_5_room',
            'schedule',
            'session_5_room'
        );

        // add foreign key for table `Rooms`
        $this->addForeignKey(
            'fk-schedule-session_5_room',
            'schedule',
            'session_5_room',
            'Rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_6_discipline`
        $this->createIndex(
            'idx-schedule-session_6_discipline',
            'schedule',
            'session_6_discipline'
        );

        // add foreign key for table `Disciplines`
        $this->addForeignKey(
            'fk-schedule-session_6_discipline',
            'schedule',
            'session_6_discipline',
            'Disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_6_teacher`
        $this->createIndex(
            'idx-schedule-session_6_teacher',
            'schedule',
            'session_6_teacher'
        );

        // add foreign key for table `Teachers`
        $this->addForeignKey(
            'fk-schedule-session_6_teacher',
            'schedule',
            'session_6_teacher',
            'Teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_6_room`
        $this->createIndex(
            'idx-schedule-session_6_room',
            'schedule',
            'session_6_room'
        );

        // add foreign key for table `Rooms`
        $this->addForeignKey(
            'fk-schedule-session_6_room',
            'schedule',
            'session_6_room',
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
            'fk-schedule-for_the_group',
            'schedule'
        );

        // drops index for column `for_the_group`
        $this->dropIndex(
            'idx-schedule-for_the_group',
            'schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_1_discipline',
            'schedule'
        );

        // drops index for column `session_1_discipline`
        $this->dropIndex(
            'idx-schedule-session_1_discipline',
            'schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-schedule-session_1_teacher',
            'schedule'
        );

        // drops index for column `session_1_teacher`
        $this->dropIndex(
            'idx-schedule-session_1_teacher',
            'schedule'
        );

        // drops foreign key for table `Rooms`
        $this->dropForeignKey(
            'fk-schedule-session_1_room',
            'schedule'
        );

        // drops index for column `session_1_room`
        $this->dropIndex(
            'idx-schedule-session_1_room',
            'schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_2_discipline',
            'schedule'
        );

        // drops index for column `session_2_discipline`
        $this->dropIndex(
            'idx-schedule-session_2_discipline',
            'schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-schedule-session_2_teacher',
            'schedule'
        );

        // drops index for column `session_2_teacher`
        $this->dropIndex(
            'idx-schedule-session_2_teacher',
            'schedule'
        );

        // drops foreign key for table `Rooms`
        $this->dropForeignKey(
            'fk-schedule-session_2_room',
            'schedule'
        );

        // drops index for column `session_2_room`
        $this->dropIndex(
            'idx-schedule-session_2_room',
            'schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_3_discipline',
            'schedule'
        );

        // drops index for column `session_3_discipline`
        $this->dropIndex(
            'idx-schedule-session_3_discipline',
            'schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-schedule-session_3_teacher',
            'schedule'
        );

        // drops index for column `session_3_teacher`
        $this->dropIndex(
            'idx-schedule-session_3_teacher',
            'schedule'
        );

        // drops foreign key for table `Rooms`
        $this->dropForeignKey(
            'fk-schedule-session_3_room',
            'schedule'
        );

        // drops index for column `session_3_room`
        $this->dropIndex(
            'idx-schedule-session_3_room',
            'schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_4_discipline',
            'schedule'
        );

        // drops index for column `session_4_discipline`
        $this->dropIndex(
            'idx-schedule-session_4_discipline',
            'schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-schedule-session_4_teacher',
            'schedule'
        );

        // drops index for column `session_4_teacher`
        $this->dropIndex(
            'idx-schedule-session_4_teacher',
            'schedule'
        );

        // drops foreign key for table `Rooms`
        $this->dropForeignKey(
            'fk-schedule-session_4_room',
            'schedule'
        );

        // drops index for column `session_4_room`
        $this->dropIndex(
            'idx-schedule-session_4_room',
            'schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_5_discipline',
            'schedule'
        );

        // drops index for column `session_5_discipline`
        $this->dropIndex(
            'idx-schedule-session_5_discipline',
            'schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-schedule-session_5_teacher',
            'schedule'
        );

        // drops index for column `session_5_teacher`
        $this->dropIndex(
            'idx-schedule-session_5_teacher',
            'schedule'
        );

        // drops foreign key for table `Rooms`
        $this->dropForeignKey(
            'fk-schedule-session_5_room',
            'schedule'
        );

        // drops index for column `session_5_room`
        $this->dropIndex(
            'idx-schedule-session_5_room',
            'schedule'
        );

        // drops foreign key for table `Disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_6_discipline',
            'schedule'
        );

        // drops index for column `session_6_discipline`
        $this->dropIndex(
            'idx-schedule-session_6_discipline',
            'schedule'
        );

        // drops foreign key for table `Teachers`
        $this->dropForeignKey(
            'fk-schedule-session_6_teacher',
            'schedule'
        );

        // drops index for column `session_6_teacher`
        $this->dropIndex(
            'idx-schedule-session_6_teacher',
            'schedule'
        );

        // drops foreign key for table `Rooms`
        $this->dropForeignKey(
            'fk-schedule-session_6_room',
            'schedule'
        );

        // drops index for column `session_6_room`
        $this->dropIndex(
            'idx-schedule-session_6_room',
            'schedule'
        );

        $this->dropTable('schedule');
    }
}
