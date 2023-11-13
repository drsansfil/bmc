<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\InformationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
            InformationSeeder::class,
            ProjectCategorySeeder::class,
        ]);
    }
}
