<?php

namespace console\seeds;

use Yii;

class TestimonialsSeeder
{
    public function run()
    {
        Yii::$app->db->createCommand()->delete('testimonials')->execute();

        $testimonials = [
            [
                'user_id' => 1,
                'testimonial' => 'Excellent leadership and coding skills. Great to work with.',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
            [
                'user_id' => 2,
                'testimonial' => 'A talented developer with a great eye for design. Highly recommended.',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Yii::$app->db->createCommand()->insert('testimonials', $testimonial)->execute();
        }

        echo "Testimonials seeded successfully.\n";
    }
}
