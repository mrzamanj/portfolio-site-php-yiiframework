<?php

use yii\db\Migration;

/**
 * Class m250319_063345_create_project_skills_table
 */
class m250319_063345_create_project_skills_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('project_skills', [
            'project_id' => $this->integer()->notNull(),
            'skill_id' => $this->integer()->notNull(),
        ]);

     
     
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    { 
        $this->dropTable('project_skills');
    }
}
