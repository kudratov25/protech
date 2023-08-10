<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_statistic}}`.
 */
class m230710_163943_create_about_statistic_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about_statistic}}', [
            'id' => $this->primaryKey(),
            'number' => $this->string()->notNull(),
            'text_ru' => $this->string()->notNull(),
            'text_uz' => $this->string()->notNull(),
            'text_en' => $this->string()->notNull(),
            'date' => $this->dateTime()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_statistic}}');
    }
}
