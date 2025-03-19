<?php 
use yii\db\Migration;

/**
 * Class m250319_063246_create_projects_table
 */
class m250319_063246_create_projects_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'link' => $this->string()->null(), // Project URL or link to GitHub/Live Demo
            'image' => $this->string()->null(), // Project image (optional)
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
        $this->dropForeignKey('fk-projects-user_id', 'projects');
        $this->dropTable('projects');
    }
}
