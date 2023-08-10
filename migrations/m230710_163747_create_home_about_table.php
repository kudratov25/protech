<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%home_about}}`.
 */
class m230710_163747_create_home_about_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%home_about}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string()->notNull(),
            'title_uz' => $this->string()->notNull(),
            'title_en' => $this->string()->notNull(),
            'content_ru' => $this->text()->notNull(),
            'content_uz' => $this->text()->notNull(),
            'content_en' => $this->text()->notNull(),
            'image' => $this->string()->notNull(),
            'date' => $this->dateTime()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%home_about}}');
    }
}
