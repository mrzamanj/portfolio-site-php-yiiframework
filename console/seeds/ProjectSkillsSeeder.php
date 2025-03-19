<?php

namespace console\seeds;

use Yii;

class ProjectSkillsSeeder
{
    public function run()
    {
        Yii::$app->db->createCommand()->delete('project_skills')->execute();
        $projectSkills = [
            ['project_id' => 1, 'skill_id' => 1], // Portfolio Website + PHP
            ['project_id' => 1, 'skill_id' => 2], // Portfolio Website + JavaScript
            ['project_id' => 2, 'skill_id' => 1], // E-commerce Platform + PHP
            ['project_id' => 2, 'skill_id' => 4], // E-commerce Platform + Laravel
            ['project_id' => 3, 'skill_id' => 3], // Mobile App Design + UI/UX Design
            ['project_id' => 3, 'skill_id' => 5], // Mobile App Design + React
        ];

        foreach ($projectSkills as $projectSkill) {
            Yii::$app->db->createCommand()->insert('project_skills', $projectSkill)->execute();
        }

        echo "ProjectSkills seeded successfully.\n";
    }
}
