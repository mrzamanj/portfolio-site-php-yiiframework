<?php

namespace app\commands;

use yii\console\Controller;
use console\seeds\UsersSeeder;
use console\seeds\ProjectsSeeder;
use console\seeds\SkillsSeeder;
use console\seeds\ProjectSkillsSeeder;
use console\seeds\ExperiencesSeeder;
use console\seeds\TestimonialsSeeder;

class SeedController extends Controller
{
    public function actionIndex()
    {
        echo "Seeding data...\n";

        // Run all seeders
        (new UsersSeeder())->run();
        (new ProjectsSeeder())->run();
        (new SkillsSeeder())->run();
        (new ProjectSkillsSeeder())->run();
        (new ExperiencesSeeder())->run();
        (new TestimonialsSeeder())->run();

        echo "Seeding completed.\n";
    }
}
