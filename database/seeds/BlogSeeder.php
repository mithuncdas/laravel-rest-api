<?php

use App\Blog;
use Faker\Factory;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach ( range(1, 10) as $index) {
            Blog::create([
                'title' => $faker->text,
                'description' => $faker->paragraph
            ]); 
        }
    }
}
