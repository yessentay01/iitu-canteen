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
                'name' => 'Soups',
            ],
        );
        DB::table('categories')->insert(
            [
                'name' => 'Main dishes',
            ],
        );
        DB::table('categories')->insert(
            [
                'name' => 'Desserts',
            ],
        );
        DB::table('categories')->insert(
            [
                'name' => 'Drinks',
            ],
        );

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/drinks/1.png',
                'name' => 'Coca-cola',
                'ingredients' =>'',
                'price' => '250',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/drinks/2.png',
                'name' => 'Piko Pulpy',
                'ingredients' =>'',
                'price' => '350',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/drinks/3.png',
                'name' => 'Maxi tea',
                'ingredients' =>'',
                'price' => '370',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/drinks/4.png',
                'name' => 'Pepsi',
                'ingredients' =>'',
                'price' => '270',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/drinks/5.png',
                'name' => 'Vanilla Frapuccino',
                'ingredients' =>'',
                'price' => '550',
                'category_name' => '4',
                'is_publish' => true,
            ]
        );

        //

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/desserts/2.png',
                'name' => 'Сarrot cake',
                'ingredients' =>'',
                'price' => '890',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/desserts/3.png',
                'name' => 'Milk girl',
                'ingredients' =>'',
                'price' => '890',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/desserts/4.png',
                'name' => 'Spinach cake',
                'ingredients' =>'',
                'price' => '890',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/desserts/5.png',
                'name' => 'Whoopi pie',
                'ingredients' =>'',
                'price' => '890',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/desserts/1.png',
                'name' => 'Pistachio roll',
                'ingredients' =>'',
                'price' => '1000',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/desserts/1.png',
                'name' => 'Pistachio roll',
                'ingredients' =>'',
                'price' => '1000',
                'category_name' => '3',
                'is_publish' => true,
            ]
        );

        //

        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/dishes/1.png',
                'name' => 'Lagman',
                'ingredients' =>'',
                'price' => '1770',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/dishes/2.png',
                'name' => 'Guiru lagman',
                'ingredients' =>'',
                'price' => '2500',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/dishes/3.png',
                'name' => 'Manty',
                'ingredients' =>'',
                'price' => '2800',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/dishes/4.png',
                'name' => 'Beshbarmak',
                'ingredients' =>'',
                'price' => '3300',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/dishes/5.png',
                'name' => 'Cabbage Rolls',
                'ingredients' =>'',
                'price' => '2180',
                'category_name' => '2',
                'is_publish' => true,
            ]
        );

        //
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/soups/1.png',
                'name' => 'Shurpa with beef',
                'ingredients' =>'',
                'price' => '1440',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/soups/2.png',
                'name' => 'Сhicken noodle soup',
                'ingredients' =>'',
                'price' => '1200',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/soups/3.png',
                'name' => 'Cream soup with broccoli',
                'ingredients' =>'',
                'price' => '1320',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );
        DB::table('items')->insert(
            [
                'images' => 'http://127.0.0.1:8000/assets/img/menu/soups/4.png',
                'name' => 'Potato soup with chicken',
                'ingredients' =>'',
                'price' => '1090',
                'category_name' => '1',
                'is_publish' => true,
            ]
        );


    }
}
