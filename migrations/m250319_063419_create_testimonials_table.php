<?php 
use yii\db\Migration;

/**
 * Class m250319_063419_create_testimonials_table
 */
class m250319_063419_create_testimonials_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('testimonials', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'author_name' => $this->string()->notNull(),
            'author_position' => $this->string()->notNull(),
            'testimonial' => $this->text()->notNull(),
            'created_at' => $this->timestamp()->defaultValue(null),
            'updated_at' => $this->timestamp()->defaultValue(null),
        ]);

        
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    { 
        $this->dropTable('testimonials');
    }
}
