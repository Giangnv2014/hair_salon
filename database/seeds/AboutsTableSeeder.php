<?php

use Illuminate\Database\Seeder;
use App\Models\About;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $data = [
            [
                'title' => null,
                'image' => null,
                'content' => $faker->realText(824),
                'stylist_id' => null,
                'type' => 1, // Destiny
                'user_id' => 0,
            ],
            [
                'title' => $faker->realText(65),
                'image' => $faker->imageUrl(360, 257, 'fashion'),
                'content' => $faker->realText(342),
                'stylist_id' => null,
                'type' => 2, // About
                'user_id' => 0,
            ],
            [
                'title' => $faker->realText(65),
                'image' => null,
                'content' => $faker->realText(162),
                'stylist_id' => null,
                'type' => 3, // Passion
                'user_id' => 0,
            ],
            [
                'title' => $faker->realText(65),
                'image' => null,
                'content' => $faker->realText(162),
                'stylist_id' => null,
                'type' => 3, // Passion
                'user_id' => 0,
            ],
            [
                'title' => $faker->realText(65),
                'image' => null,
                'content' => $faker->realText(162),
                'stylist_id' => null,
                'type' => 3, // Passion
                'user_id' => 0,
            ],
            [
                'title' => $faker->name,
                'image' => $faker->imageUrl(170, 170, 'people'),
                'content' => $faker->realText(40),
                'stylist_id' => 1,
                'type' => 4, // Stylist
                'user_id' => 0,
            ],
            [
                'title' => $faker->name,
                'image' => $faker->imageUrl(170, 170, 'people'),
                'content' => $faker->realText(40),
                'stylist_id' => 2,
                'type' => 4, // Stylist
                'user_id' => 0,
            ],
            [
                'title' => $faker->name,
                'image' => $faker->imageUrl(170, 170, 'people'),
                'content' => $faker->realText(40),
                'stylist_id' => 3,
                'type' => 4, // Stylist
                'user_id' => 0,
            ],
            [
                'title' => $faker->name,
                'image' => $faker->imageUrl(170, 170, 'people'),
                'content' => $faker->realText(40),
                'stylist_id' => 4,
                'type' => 4, // Stylist
                'user_id' => 0,
            ],
            [
                'title' => $faker->name,
                'image' => $faker->imageUrl(170, 170, 'people'),
                'content' => $faker->realText(40),
                'stylist_id' => 4,
                'type' => 4, // Stylist
                'user_id' => 0,
            ],
        ];

        About::truncate();
        About::insert($data);
    }
}
