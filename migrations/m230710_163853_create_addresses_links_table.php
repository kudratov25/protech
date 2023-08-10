<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%addresses_links}}`.
 */
class m230710_163853_create_addresses_links_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%addresses_links}}', [
            'id' => $this->primaryKey(),
            'phone_number' =>$this->string()->notNull(),
            'google_address' => $this->text()->notNull(),
            'address_name_ru' => $this->text()->notNull(),
            'address_name_uz' => $this->text()->notNull(),
            'address_name_en' => $this->text()->notNull(),
            'email' => $this->string()->notNull(),
            'telegram' => $this->string()->notNull(),
            'facebook' => $this->string()->notNull(),
            'instagram' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%addresses_links}}');
    }
}
