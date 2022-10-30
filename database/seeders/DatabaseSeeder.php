<?php

namespace Database\Seeders;

use App\Models\ClientReview;
use App\Models\Education;
use App\Models\FeaturedProject;
use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\PortfolioImage;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\ProfessionalSkill;
use App\Models\Service;
use App\Models\SocialMedia;
use App\Models\TechnicalSkill;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WorkExperience;
use App\Models\WorkResponsibility;

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
        Education::factory(4)->create();
        WorkExperience::factory(4)->create();
        WorkResponsibility::factory(15)->create();
        PortfolioCategory::factory(5)->create();
        Portfolio::factory(10)->create();
        PortfolioImage::factory(30)->create();
        PostCategory::factory(5)->create();
        Post::factory(10)->create();
        SocialMedia::factory(5)->create();
        ClientReview::factory(5)->create();
    }
}
