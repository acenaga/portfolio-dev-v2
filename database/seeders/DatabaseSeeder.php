<?php

namespace Database\Seeders;

use App\Models\FeaturedProject;
use App\Models\ProfessionalSkill;
use App\Models\Service;
use App\Models\TechnicalSkill;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        TechnicalSkill::factory(5)->create();
        ProfessionalSkill::factory(5)->create();
        Service::factory(6)->create();
        FeaturedProject::factory(4)->create();

    }
}
