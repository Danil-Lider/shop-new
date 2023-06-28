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
        // \App\Models\Item::factory(10)->create();

        // DB::table('status')->insert([
        //     'name' => 'active'
        // ]);

        DB::table('items')->insert([
            'name' => 'Универсальный',
            'model' => 'TG-KS kick sensor',
            'image' => '',
            'link_youtube' => 'vk.com',
            'status' => 1,
        ]);


        DB::table('items')->insert([
            'name' => 'ACURA CDX 2016-2021',
            'model' => 'TG-AR-01',
            'image' => '',
            'link_youtube' => '',
            'status' => 1,
        ]);


        DB::table('items')->insert([
            'name' => 'BWM 5 series 2011-2017',
            'model' => 'TG-BW-06',
            'image' => '',
            'link_youtube' => '',
            'status' => 1,
        ]);



        

    }
}
