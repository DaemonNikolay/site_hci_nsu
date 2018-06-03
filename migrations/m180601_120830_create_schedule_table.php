<?php

use yii\db\Migration;

/**
 * Handles the creation of table `schedule`.
 * Has foreign keys to the tables:
 *
 * - `groups`
 * - `disciplines`
 * - `teachers`
 * - `rooms`
 * - `disciplines`
 * - `teachers`
 * - `rooms`
 * - `disciplines`
 * - `teachers`
 * - `rooms`
 * - `disciplines`
 * - `teachers`
 * - `rooms`
 * - `disciplines`
 * - `teachers`
 * - `rooms`
 * - `disciplines`
 * - `teachers`
 * - `rooms`
 */
class m180601_120830_create_schedule_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('schedule', [
            'training_group' => $this->integer(),
            'day_of_week' => "ENUM('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота')",
            'status_week' => "ENUM('Чётная', 'Нечётная')",
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
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);

        // creates primary keys
        $this->addPrimaryKey('pk-schedule', 'schedule', ['training_group', 'day_of_week', 'status_week']);

        // creates index for column `training_group`
        $this->createIndex(
            'idx-schedule-training_group',
            'schedule',
            'training_group'
        );

        // add foreign key for table `groups`
        $this->addForeignKey(
            'fk-schedule-training_group',
            'schedule',
            'training_group',
            'groups',
            'id',
            'CASCADE'
        );

        // creates index for column `session_1_discipline`
        $this->createIndex(
            'idx-schedule-session_1_discipline',
            'schedule',
            'session_1_discipline'
        );

        // add foreign key for table `disciplines`
        $this->addForeignKey(
            'fk-schedule-session_1_discipline',
            'schedule',
            'session_1_discipline',
            'disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_1_teacher`
        $this->createIndex(
            'idx-schedule-session_1_teacher',
            'schedule',
            'session_1_teacher'
        );

        // add foreign key for table `teachers`
        $this->addForeignKey(
            'fk-schedule-session_1_teacher',
            'schedule',
            'session_1_teacher',
            'teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_1_room`
        $this->createIndex(
            'idx-schedule-session_1_room',
            'schedule',
            'session_1_room'
        );

        // add foreign key for table `rooms`
        $this->addForeignKey(
            'fk-schedule-session_1_room',
            'schedule',
            'session_1_room',
            'rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_2_discipline`
        $this->createIndex(
            'idx-schedule-session_2_discipline',
            'schedule',
            'session_2_discipline'
        );

        // add foreign key for table `disciplines`
        $this->addForeignKey(
            'fk-schedule-session_2_discipline',
            'schedule',
            'session_2_discipline',
            'disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_2_teacher`
        $this->createIndex(
            'idx-schedule-session_2_teacher',
            'schedule',
            'session_2_teacher'
        );

        // add foreign key for table `teachers`
        $this->addForeignKey(
            'fk-schedule-session_2_teacher',
            'schedule',
            'session_2_teacher',
            'teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_2_room`
        $this->createIndex(
            'idx-schedule-session_2_room',
            'schedule',
            'session_2_room'
        );

        // add foreign key for table `rooms`
        $this->addForeignKey(
            'fk-schedule-session_2_room',
            'schedule',
            'session_2_room',
            'rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_3_discipline`
        $this->createIndex(
            'idx-schedule-session_3_discipline',
            'schedule',
            'session_3_discipline'
        );

        // add foreign key for table `disciplines`
        $this->addForeignKey(
            'fk-schedule-session_3_discipline',
            'schedule',
            'session_3_discipline',
            'disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_3_teacher`
        $this->createIndex(
            'idx-schedule-session_3_teacher',
            'schedule',
            'session_3_teacher'
        );

        // add foreign key for table `teachers`
        $this->addForeignKey(
            'fk-schedule-session_3_teacher',
            'schedule',
            'session_3_teacher',
            'teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_3_room`
        $this->createIndex(
            'idx-schedule-session_3_room',
            'schedule',
            'session_3_room'
        );

        // add foreign key for table `rooms`
        $this->addForeignKey(
            'fk-schedule-session_3_room',
            'schedule',
            'session_3_room',
            'rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_4_discipline`
        $this->createIndex(
            'idx-schedule-session_4_discipline',
            'schedule',
            'session_4_discipline'
        );

        // add foreign key for table `disciplines`
        $this->addForeignKey(
            'fk-schedule-session_4_discipline',
            'schedule',
            'session_4_discipline',
            'disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_4_teacher`
        $this->createIndex(
            'idx-schedule-session_4_teacher',
            'schedule',
            'session_4_teacher'
        );

        // add foreign key for table `teachers`
        $this->addForeignKey(
            'fk-schedule-session_4_teacher',
            'schedule',
            'session_4_teacher',
            'teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_4_room`
        $this->createIndex(
            'idx-schedule-session_4_room',
            'schedule',
            'session_4_room'
        );

        // add foreign key for table `rooms`
        $this->addForeignKey(
            'fk-schedule-session_4_room',
            'schedule',
            'session_4_room',
            'rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_5_discipline`
        $this->createIndex(
            'idx-schedule-session_5_discipline',
            'schedule',
            'session_5_discipline'
        );

        // add foreign key for table `disciplines`
        $this->addForeignKey(
            'fk-schedule-session_5_discipline',
            'schedule',
            'session_5_discipline',
            'disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_5_teacher`
        $this->createIndex(
            'idx-schedule-session_5_teacher',
            'schedule',
            'session_5_teacher'
        );

        // add foreign key for table `teachers`
        $this->addForeignKey(
            'fk-schedule-session_5_teacher',
            'schedule',
            'session_5_teacher',
            'teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_5_room`
        $this->createIndex(
            'idx-schedule-session_5_room',
            'schedule',
            'session_5_room'
        );

        // add foreign key for table `rooms`
        $this->addForeignKey(
            'fk-schedule-session_5_room',
            'schedule',
            'session_5_room',
            'rooms',
            'id',
            'CASCADE'
        );

        // creates index for column `session_6_discipline`
        $this->createIndex(
            'idx-schedule-session_6_discipline',
            'schedule',
            'session_6_discipline'
        );

        // add foreign key for table `disciplines`
        $this->addForeignKey(
            'fk-schedule-session_6_discipline',
            'schedule',
            'session_6_discipline',
            'disciplines',
            'id',
            'CASCADE'
        );

        // creates index for column `session_6_teacher`
        $this->createIndex(
            'idx-schedule-session_6_teacher',
            'schedule',
            'session_6_teacher'
        );

        // add foreign key for table `teachers`
        $this->addForeignKey(
            'fk-schedule-session_6_teacher',
            'schedule',
            'session_6_teacher',
            'teachers',
            'id',
            'CASCADE'
        );

        // creates index for column `session_6_room`
        $this->createIndex(
            'idx-schedule-session_6_room',
            'schedule',
            'session_6_room'
        );

        // add foreign key for table `rooms`
        $this->addForeignKey(
            'fk-schedule-session_6_room',
            'schedule',
            'session_6_room',
            'rooms',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `groups`
        $this->dropForeignKey(
            'fk-schedule-training_group',
            'schedule'
        );

        // drops index for column `training_group`
        $this->dropIndex(
            'idx-schedule-training_group',
            'schedule'
        );

        // drops foreign key for table `disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_1_discipline',
            'schedule'
        );

        // drops index for column `session_1_discipline`
        $this->dropIndex(
            'idx-schedule-session_1_discipline',
            'schedule'
        );

        // drops foreign key for table `teachers`
        $this->dropForeignKey(
            'fk-schedule-session_1_teacher',
            'schedule'
        );

        // drops index for column `session_1_teacher`
        $this->dropIndex(
            'idx-schedule-session_1_teacher',
            'schedule'
        );

        // drops foreign key for table `rooms`
        $this->dropForeignKey(
            'fk-schedule-session_1_room',
            'schedule'
        );

        // drops index for column `session_1_room`
        $this->dropIndex(
            'idx-schedule-session_1_room',
            'schedule'
        );

        // drops foreign key for table `disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_2_discipline',
            'schedule'
        );

        // drops index for column `session_2_discipline`
        $this->dropIndex(
            'idx-schedule-session_2_discipline',
            'schedule'
        );

        // drops foreign key for table `teachers`
        $this->dropForeignKey(
            'fk-schedule-session_2_teacher',
            'schedule'
        );

        // drops index for column `session_2_teacher`
        $this->dropIndex(
            'idx-schedule-session_2_teacher',
            'schedule'
        );

        // drops foreign key for table `rooms`
        $this->dropForeignKey(
            'fk-schedule-session_2_room',
            'schedule'
        );

        // drops index for column `session_2_room`
        $this->dropIndex(
            'idx-schedule-session_2_room',
            'schedule'
        );

        // drops foreign key for table `disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_3_discipline',
            'schedule'
        );

        // drops index for column `session_3_discipline`
        $this->dropIndex(
            'idx-schedule-session_3_discipline',
            'schedule'
        );

        // drops foreign key for table `teachers`
        $this->dropForeignKey(
            'fk-schedule-session_3_teacher',
            'schedule'
        );

        // drops index for column `session_3_teacher`
        $this->dropIndex(
            'idx-schedule-session_3_teacher',
            'schedule'
        );

        // drops foreign key for table `rooms`
        $this->dropForeignKey(
            'fk-schedule-session_3_room',
            'schedule'
        );

        // drops index for column `session_3_room`
        $this->dropIndex(
            'idx-schedule-session_3_room',
            'schedule'
        );

        // drops foreign key for table `disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_4_discipline',
            'schedule'
        );

        // drops index for column `session_4_discipline`
        $this->dropIndex(
            'idx-schedule-session_4_discipline',
            'schedule'
        );

        // drops foreign key for table `teachers`
        $this->dropForeignKey(
            'fk-schedule-session_4_teacher',
            'schedule'
        );

        // drops index for column `session_4_teacher`
        $this->dropIndex(
            'idx-schedule-session_4_teacher',
            'schedule'
        );

        // drops foreign key for table `rooms`
        $this->dropForeignKey(
            'fk-schedule-session_4_room',
            'schedule'
        );

        // drops index for column `session_4_room`
        $this->dropIndex(
            'idx-schedule-session_4_room',
            'schedule'
        );

        // drops foreign key for table `disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_5_discipline',
            'schedule'
        );

        // drops index for column `session_5_discipline`
        $this->dropIndex(
            'idx-schedule-session_5_discipline',
            'schedule'
        );

        // drops foreign key for table `teachers`
        $this->dropForeignKey(
            'fk-schedule-session_5_teacher',
            'schedule'
        );

        // drops index for column `session_5_teacher`
        $this->dropIndex(
            'idx-schedule-session_5_teacher',
            'schedule'
        );

        // drops foreign key for table `rooms`
        $this->dropForeignKey(
            'fk-schedule-session_5_room',
            'schedule'
        );

        // drops index for column `session_5_room`
        $this->dropIndex(
            'idx-schedule-session_5_room',
            'schedule'
        );

        // drops foreign key for table `disciplines`
        $this->dropForeignKey(
            'fk-schedule-session_6_discipline',
            'schedule'
        );

        // drops index for column `session_6_discipline`
        $this->dropIndex(
            'idx-schedule-session_6_discipline',
            'schedule'
        );

        // drops foreign key for table `teachers`
        $this->dropForeignKey(
            'fk-schedule-session_6_teacher',
            'schedule'
        );

        // drops index for column `session_6_teacher`
        $this->dropIndex(
            'idx-schedule-session_6_teacher',
            'schedule'
        );

        // drops foreign key for table `rooms`
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
