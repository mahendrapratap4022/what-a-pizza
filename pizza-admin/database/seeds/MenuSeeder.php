<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('menus')->insert([
            [
                'name'=>$faker->name,
                'details' => $faker->text(200),
                'image' => 'https://tanoswisconsin.com/wp-content/uploads/2017/10/tanos-pizza-pepperoni-tomato-mushroom-400x400.png',
                'dollar_price' => $faker->randomNumber(2),
                'euro_price' => $faker->randomNumber(3),
            ],
            [
                'name'=>$faker->name,
                'details' => $faker->text(200),
                'image' => 'https://life-in-the-lofthouse.com/wp-content/uploads/2018/05/Chicken-Taco-Pizza-400x400.jpg',
                'dollar_price' => $faker->randomNumber(2),
                'euro_price' => $faker->randomNumber(3),
            ],
            [
                'name'=>$faker->name,
                'details' => $faker->text(200),
                'image' => 'https://s23991.pcdn.co/wp-content/uploads/fly-images/66128/spanish-pizza-400x400-c.jpg',
                'dollar_price' => $faker->randomNumber(2),
                'euro_price' => $faker->randomNumber(3),
            ],
            [
                'name'=>$faker->name,
                'details' => $faker->text(200),
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTw0_08xJD7zDC8OLeXfvsozfVHzpi0rd9OZ7jOrEY6-DRg4OE1&usqp=CAU',
                'dollar_price' => $faker->randomNumber(2),
                'euro_price' => $faker->randomNumber(3),
            ],
            [
                'name'=>$faker->name,
                'details' => $faker->text(200),
                'image' => 'https://www.caseys.com/medias/8103-base-400x400.png?context=bWFzdGVyfGltYWdlc3w5NjQ4OXxpbWFnZS9wbmd8aDU5L2g3My84Nzk2NDkxMjUxNzQyLzgxMDNfYmFzZS00MDB4NDAwLnBuZ3wzZmNkYzAxNWFhMjlhZGNmZDlkMjgxZTg5ODFkYzFhNDIzODUyOThjYTM4YzVjYzU2OWZmOGI1ZTYwYzBhNGFh',
                'dollar_price' => $faker->randomNumber(2),
                'euro_price' => $faker->randomNumber(3),
            ],
            [
                'name'=>$faker->name,
                'details' => $faker->text(200),
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSLsyV2Ed4z9-XkvdTZboH6EpxVTj7RVgdxS8xCzWAIm_HSk5Rq&usqp=CAU',
                'dollar_price' => $faker->randomNumber(2),
                'euro_price' => $faker->randomNumber(3),
            ],
            [
                'name'=>$faker->name,
                'details' => $faker->text(200),
                'image' => 'https://www.caseys.com/medias/8103-base-400x400.png?context=bWFzdGVyfGltYWdlc3w5NjQ4OXxpbWFnZS9wbmd8aDU5L2g3My84Nzk2NDkxMjUxNzQyLzgxMDNfYmFzZS00MDB4NDAwLnBuZ3wzZmNkYzAxNWFhMjlhZGNmZDlkMjgxZTg5ODFkYzFhNDIzODUyOThjYTM4YzVjYzU2OWZmOGI1ZTYwYzBhNGFh',
                'dollar_price' => $faker->randomNumber(2),
                'euro_price' => $faker->randomNumber(3),
            ],
            [
                'name'=>$faker->name,
                'details' => $faker->text(200),
                'image' => 'https://delicepizzapasta.com/dynamic_content/cdn/533_81f196c3b14ea1d64c7e1b1fc25d4b92.jpg',
                'dollar_price' => $faker->randomNumber(2),
                'euro_price' => $faker->randomNumber(3),
            ],
        ]);

    }
}
