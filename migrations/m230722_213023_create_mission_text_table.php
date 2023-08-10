<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mission_text}}`.
 */
class m230722_213023_create_mission_text_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mission_text}}', [
            'id' => $this->primaryKey(),

            'small_title_ru' => $this->text(),
            'small_title_uz' => $this->text(),
            'small_title_en' => $this->text(),
            

            'title_1_ru' => $this->string(),
            'title_1_uz' => $this->string(),
            'title_1_en' => $this->string(),
            
            'text1_ru' => $this->text(),
            'text1_uz' => $this->text(),
            'text1_en' => $this->text(),
            'image1' => $this->string(),
            
            
            
            'title_2_ru' => $this->string(),
            'title_2_uz' => $this->string(),
            'title_2_en' => $this->string(),
            
            'text2_ru' => $this->text(),
            'text2_uz' => $this->text(),
            'text2_en' => $this->text(),
            
            'image2' => $this->string(),


            'title_3_ru' => $this->string(),
            'title_3_uz' => $this->string(),
            'title_3_en' => $this->string(),
            'text3_en' => $this->text(),

            'text3_ru' => $this->text(),
            'text3_uz' => $this->text(),
            'image3' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mission_text}}');
    }
}
