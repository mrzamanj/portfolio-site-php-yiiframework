<?php

namespace console\seeds;

use Yii;

class ProjectsSeeder
{
    public function run()
    {

        Yii::$app->db->createCommand()->delete('projects')->execute();
        $projects = [
            [
                'user_id' => 1,
                'title' => 'Portfolio Website',
                'description' => 'A personal portfolio website to showcase web development projects.',
                'link' => 'https://www.example.com/portfolio',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
            [
                'user_id' => 2,
                'title' => 'E-commerce Platform',
                'description' => 'A full-featured e-commerce platform built with Laravel.',
                'link' => 'https://www.example.com/shop',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
            [
                'user_id' => 3,
                'title' => 'Mobile App Design',
                'description' => 'UI/UX design for a mobile application focused on fitness tracking.',
                'link' => 'https://www.example.com/fitness-app',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
        ];

        foreach ($projects as $project) {
            Yii::$app->db->createCommand()->insert('projects', $project)->execute();
        }

        echo "Projects seeded successfully.\n";
    }
}
