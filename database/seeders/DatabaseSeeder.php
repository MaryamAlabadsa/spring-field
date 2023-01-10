<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Media;
use App\Models\News;
use App\Models\Project;
use App\Models\ProjectServices;
use App\Models\ProjectTeams;
use App\Models\Service;
use App\Models\Teams;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()->count(15)->create();
        Service::factory()->count(10)->create();
        Media::factory()->count(10)->create();
        Teams::factory()->count(10)->create();
        News::factory()->count(10)->create();
        Comment::factory()->count(4)->create();
        ProjectServices::factory()->count(5)->create();
        ProjectTeams::factory()->count(5)->create();

    }
}
