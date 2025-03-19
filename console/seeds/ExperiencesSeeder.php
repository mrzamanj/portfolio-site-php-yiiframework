<?php

namespace console\seeds;

use Yii;

class ExperiencesSeeder
{
    public function run()
    {
        Yii::$app->db->createCommand()->delete('experiences')->execute();
        $experiences = [
            [
                'user_id' => 1,
                'title' => 'Senior Developer',
                'company' => 'Tech Company',
                'start_date' => '2018-06-01',
                'end_date' => '2021-06-01',
                'description' => 'Developed various web applications and led a team of junior developers.',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
            [
                'user_id' => 2,
                'title' => 'Frontend Developer',
                'company' => 'E-commerce Co.',
                'start_date' => '2019-04-01',
                'end_date' => '2022-04-01',
                'description' => 'Built frontend interfaces for an e-commerce platform using React.',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
        ];

        foreach ($experiences as $experience) {
            Yii::$app->db->createCommand()->insert('experiences', $experience)->execute();
        }

        echo "Experiences seeded successfully.\n";
    }
}
