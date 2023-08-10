<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%services}}`.
 */
class m230710_164019_create_services_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%services}}', [
            'id' => $this->primaryKey(),
        
            // 'short_description'->for home page carousel, not required
            'short_description_ru' => $this->text(),
            'short_description_uz' => $this->text(),
            'short_description_en' => $this->text(),
        
            // 'image_bg' also not required, for home carousel
            'image_bg' => $this->string(),
        
            // title for every service, required area
            'title_ru' => $this->text()->notNull(),
            'title_uz' => $this->text()->notNull(),
            'title_en' => $this->text()->notNull(),
        
            'image_main' => $this->string()->notNull(),
            'text_ru' => $this->text()->notNull(),
            'text_uz' => $this->text()->notNull(),
            'text_en' => $this->text()->notNull(),
        
            // full text, not required
            'text_full_ru' => $this->text(),
            'text_full_uz' => $this->text(),
            'text_full_en' => $this->text(),
        
            'isHome' => $this->boolean()->defaultValue(0), // Set the default value to 0
            'created_at' => $this->dateTime()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%services}}');
    }
}
