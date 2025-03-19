<?php

use yii\db\Migration;

/**
 * Class m250319_063403_create_experiences_table
 */
class m250319_063403_create_experiences_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('experiences', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'company_name' => $this->string()->notNull(),
            'position' => $this->string()->notNull(),
            'start_date' => $this->date()->notNull(),
            'end_date' => $this->date()->null(), // Can be null if currently employed
            'description' => $this->text()->null(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);
 
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    { 
        $this->dropTable('experiences');
    }
}
