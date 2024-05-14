<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Faker\Factory as Faker;
class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {      
        
        Blog::create([
            'title' => 'Dummy title',
            'author' => 'jedi_bob',
            'content' => 'lorus impus',
            'publication_date' => now(),
        ]);
        
        Blog::create([
            'title' => 'title',
            'author' => 'Darth_jarjar',
            'content' => 'lorus impus',
            'publication_date' => now(),
        ]);
        Blog::create([
            'title' => 'Dummy titles',
            'author' => 'jedi_bobus',
            'content' => 'lorus impus',
            'publication_date' => now(),
        ]);

        $faker = Faker::create();

        // Generate 3 random blog entries
        for ($i = 0; $i < 30; $i++) {
            Blog::create([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'content' => $faker->paragraph,
                'publication_date' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            ]);
        }
    }
}
