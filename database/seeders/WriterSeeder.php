<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        // for ($i = 0; $i < 3; $i++) { 
        //     Writer::create([
        //         'name' => $faker->name,
        //         'role' => $faker->jobTitle,
        //         'photo_name' => $faker->imageUrl,
        //     ]);
        // }

        // Agar bisa diisi photo sesuai dengan yang ada di folder public/assets/writer_photo
        for($i = 1; $i < 4; $i++){
            Writer::create([
                'name' => $faker->name,
                'role' => $faker->jobTitle,
                'photo_name' => 'photo_profile_' . $i . '.jpg',
            ]);
        }
    }
}
