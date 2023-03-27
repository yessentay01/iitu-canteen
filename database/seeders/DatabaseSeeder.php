<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'name' => 'Starters',
            ],
        );
        DB::table('categories')->insert(
            [
                'name' => 'Breakfast',
            ],
        );
        DB::table('categories')->insert(
            [
                'name' => 'Lunch',
            ],
        );
        DB::table('categories')->insert(
            [
                'name' => 'Dinner',
            ],
        );

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-1.png',
                'name' => 'Magnam Tiste',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '2500',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-2.png',
                'name' => 'Aut Luia',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1200',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-3.png',
                'name' => 'Est Eligendi',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1650',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-4.png',
                'name' => 'Eos Luibusdam',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1470',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-5.png',
                'name' => 'Eos Luibusdam',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1340',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-6.png',
                'name' => 'Laboriosam Direva',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1760',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );

        /////
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-3.png',
                'name' => 'Magnam Tiste',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '2500',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-4.png',
                'name' => 'Aut Luia',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1200',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-2.png',
                'name' => 'Est Eligendi',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1650',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-1.png',
                'name' => 'Eos Luibusdam',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1470',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-6.png',
                'name' => 'Eos Luibusdam',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1340',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-5.png',
                'name' => 'Laboriosam Direva',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1760',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );

        /////
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-3.png',
                'name' => 'Magnam Tiste',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '2500',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-2.png',
                'name' => 'Aut Luia',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1200',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-1.png',
                'name' => 'Est Eligendi',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1650',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-2.png',
                'name' => 'Eos Luibusdam',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1470',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-6.png',
                'name' => 'Eos Luibusdam',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1340',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-3.png',
                'name' => 'Laboriosam Direva',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1760',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        /////
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-4.png',
                'name' => 'Magnam Tiste',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '2500',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-5.png',
                'name' => 'Aut Luia',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1200',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-2.png',
                'name' => 'Est Eligendi',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1650',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-6.png',
                'name' => 'Eos Luibusdam',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1470',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-1.png',
                'name' => 'Eos Luibusdam',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1340',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/menu-item-2.png',
                'name' => 'Laboriosam Direva',
                'ingredients' =>'Lorem, deren, trataro, filede, nerada',
                'price' => '1760',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );

    }
}
