<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%certificates}}`.
 */
class m230710_163959_create_certificates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%certificates}}', [
            'id' => $this->primaryKey(),
            'image' => $this->string()->notNull(),
            'name' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%certificates}}');
    }
}
