<?php

namespace console\seeds;

use Yii;

class UsersSeeder
{
    public function run()
    {
        Yii::$app->db->createCommand()->delete('users')->execute();

        // Sample data
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'profile_picture' => 'https://www.example.com/images/admin.jpg',
                'bio' => 'Admin user bio goes here.',
                'contact_number' => '1234567890',
                'location' => 'Admin City',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'profile_picture' => 'https://www.example.com/images/john.jpg',
                'bio' => 'Web developer with a passion for coding.',
                'contact_number' => '9876543210',
                'location' => 'New York',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'profile_picture' => 'https://www.example.com/images/jane.jpg',
                'bio' => 'Graphic designer with experience in UI/UX.',
                'contact_number' => '1122334455',
                'location' => 'Los Angeles',
                'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
                'updated_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss'),
            ],
        ];

        // Insert data into the `users` table
        foreach ($users as $user) {
            Yii::$app->db->createCommand()->insert('users', $user)->execute();
        }

        echo "Users seeded successfully.\n";
    }
}
