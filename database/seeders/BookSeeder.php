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
            'name' => 'Платье белое',
            'status' => 1,
            'image' => 'https://akvateh.su/images/m-gl-2.jpg?crc=3778793399',
            'price' => rand(100, 1000),
            'is_recom' => 0
        ]);


        DB::table('items')->insert([
            'name' => 'Платье красное',
            'status' => 1,
            'image' => 'https://akvateh.su/images/m-gl-2.jpg?crc=3778793399',
            'price' => rand(100, 1000),
            'is_recom' => 0
        ]);



        DB::table('items')->insert([
            'name' => 'Платье голубое',
            'status' => 1,
            'image' => 'https://akvateh.su/images/m-gl-2.jpg?crc=3778793399',
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
