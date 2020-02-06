<?php

use Illuminate\Database\Seeder;
use App\Blog;
use App\Data;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DataSeeder::class);
        $this->call(BlogSeeder::class);
    }
}
