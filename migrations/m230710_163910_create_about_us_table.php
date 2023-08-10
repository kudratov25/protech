<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%about_us}}`.
 */
class m230710_163910_create_about_us_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%about_us}}', [
            'id' => $this->primaryKey(),
            'text_ru' => $this->text()->notNull(),
            'text_uz' => $this->text()->notNull(),
            'text_en' => $this->text()->notNull(),
            'image' => $this->string()->notNull(),
            'date' => $this->dateTime()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%about_us}}');
    }
}
