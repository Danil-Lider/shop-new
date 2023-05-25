<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Book::factory(10)->create();

        // DB::table('status')->insert([
        //     'name' => 'active'
        // ]);

        DB::table('items')->insert([
            'name' => 'Свитер черно-белый',
            'status' => 1,
            'image' => '/assets/img/content1.png',
            'price' => rand(100, 1000),
            'is_recom' => 0
        ]);


        DB::table('items')->insert([
            'name' => 'Платье красное',
            'status' => 1,
            'image' => 'https://nicolewedding.ru/upload/resize_cache/iblock/546/607_800_2/54624fa3b009fc8fe320d13adc689348.jpg',
            'price' => rand(100, 1000),
            'is_recom' => 0
        ]);



        DB::table('items')->insert([
            'name' => 'Платье голубое',
            'status' => 1,
            'image' => 'https://ru.paulaindress.com/image/cache/catalog/fly-baby-fly/fbf-ayva-01-700x1050-product_thumb.jpg',
            'price' => rand(100, 1000),
            'is_recom' => 0
        ]);


        DB::table('items')->insert([
            'name' => 'Платье зеленое',
            'status' => 1,
            'image' => 'https://ae01.alicdn.com/kf/H35799e9f6a6d4cd09d6c9e03c944fd09B.jpg',
            'price' => rand(100, 1000),
            'is_recom' => 0
        ]); 



        // DB::table('items')->insert([
        //     'name' => 'Сююмбике 22 ',
        //     'status' => 1,
        //     'image' => 'https://uniservis.su/assets/img/proek_moeженскаяk.png'
        // ]);


        // DB::table('items')->insert([
        //     'name' => 'Вахитова 55',
        //     'status' => 1,
        //     'image' => 'https://aquarama-rus.ru/upload/medialibrary/84e/portal.jpg'
        // ]);


        

    }
}
