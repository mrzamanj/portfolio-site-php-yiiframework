<?php

namespace console\seeds;

use Yii;

class SkillsSeeder
{
    public function run()
    {
        Yii::$app->db->createCommand()->delete('skills')->execute();
        $skills = [
            ['name' => 'PHP', 'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss')],
            ['name' => 'JavaScript', 'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss')],
            ['name' => 'UI/UX Design', 'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss')],
            ['name' => 'Laravel', 'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss')],
            ['name' => 'React', 'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss')],
            ['name' => 'MySQL', 'created_at' => Yii::$app->formatter->asDatetime(time(), 'yyyy-MM-dd HH:mm:ss')],
        ];

        foreach ($skills as $skill) {
            Yii::$app->db->createCommand()->insert('skills', $skill)->execute();
        }

        echo "Skills seeded successfully.\n";
    }
}
