<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%home_our_advantages}}`.
 */
class m230710_163816_create_home_our_advantages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%home_our_advantages}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%home_our_advantages}}');
    }
}
