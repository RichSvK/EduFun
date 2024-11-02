<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;
use App\Models\Writer;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $writer = Writer::all();

        // Jika semua data random menggunakan Faker
        // for ($i = 0; $i < 6; $i++) { 
        //     Article::create([
        //         'title' => $faker->sentence,
        //         'photo_name' => $faker->imageUrl,
        //         'description' => $faker->paragraph,
        //         'category' => $faker->randomElement(['Data Science', 'Network Security']),
        //         'writer_id' => $writer->random()->id,
        //     ]);
        // }

        // Untuk default data (Agar bisa diisi photo sesuai dengan yang ada di folder public/assets)
        $articles = [
            // Untuk Artikel category Data Science
            [
                'title' => 'Machine Learning',
                'photo_name' => 'machine_learning.png',
                'description' => $faker->paragraph,
                'category' => 'Data Science',
                'writer_id' => $writer->random()->id,
            ], [
                'title' => 'Deep Learning',
                'photo_name' => 'deep_learning.png',
                'description' => $faker->paragraph,
                'category' => 'Data Science',
                'writer_id' => $writer->random()->id,
            ], [
                'title' => 'Natural Language Processing',
                'photo_name' => 'NLP.png',
                'description' => $faker->paragraph,
                'category' => 'Data Science',
                'writer_id' => $writer->random()->id,
            ], 

            // Artikel category Network Security
            [
                'title' => 'Apa itu Network Security?',
                'photo_name' => 'network_security.jpg',
                'description' => $faker->paragraph,
                'category' => 'Network Security',
                'writer_id' => $writer->random()->id,
            ], [
                'title' => 'Network Security Tools',
                'photo_name' => 'networking_tools.jpg',
                'description' => $faker->paragraph,
                'category' => 'Network Security',
                'writer_id' => $writer->random()->id,
            ], [
                'title' => 'Network Security Best Practices',
                'photo_name' => 'networking_best_practice.jpg',
                'description' => $faker->paragraph,
                'category' => 'Network Security',
                'writer_id' => $writer->random()->id,
            ]
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
