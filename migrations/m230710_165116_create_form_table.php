<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%form}}`.
 */
class m230710_165116_create_form_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%form}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'phone_number' => $this->string()->notNull(),
            'date' => $this->dateTime()->defaultValue(null)->append('ON UPDATE CURRENT_TIMESTAMP'),
            'ip_address' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%form}}');
    }
}
