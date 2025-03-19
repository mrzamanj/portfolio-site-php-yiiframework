<?php

use yii\db\Migration;

/**
 * Class m250319_063328_create_skills_table
 */
 class m250319_063328_create_skills_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('skills', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'level' => $this->string()->null(), // Skill proficiency level (e.g., Beginner, Intermediate, Expert)
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);

       
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        // Drop foreign key before dropping table
        $this->dropForeignKey('fk-skills-user_id', 'skills');
        $this->dropTable('skills');
    }
}
