<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $processer_generation = [
            ['name' => 'Intel 5th gen'],
            ['name' => 'Intel 6th gen'],
            ['name' => 'Intel 7th gen'],
            ['name' => 'Intel 8th gen'],
            ['name' => 'Intel 9th gen'],
            ['name' => 'Intel 10th gen'],
            ['name' => 'Intel 11th gen'],
            ['name' => 'Intel 12th gen'],
            ['name' => 'Intel 13th gen'],
            ['name' => 'AMD Ryzen 3000 series'],
            ['name' => 'AMD Ryzen 4000 series'],
            ['name' => 'AMD Ryzen 5000 series'],
            ['name' => 'AMD Ryzen 6000 series'],
            ['name' => 'AMD Ryzen 7000 series'],
        ];
        DB::table('processor_generations')->insert($processer_generation);

        $processer_model = [
            ['name' => 'Intel core i3'],
            ['name' => 'Intel core i5'],
            ['name' => 'Intel core i7'],
            ['name' => 'Intel core i9'],
            ['name' => 'AMD Athlon'],
            ['name' => 'AMD Ryzen 3'],
            ['name' => 'AMD Ryzen 5'],
            ['name' => 'AMD Ryzen 7'],
            ['name' => 'AMD Ryzen 9'],
            ['name' => 'Apple M1'],
            ['name' => 'Apple M1 Pro'],
            ['name' => 'Apple M1 Pro Max'],
            ['name' => 'Apple M2'],
            ['name' => 'Apple M2 Pro'],
            ['name' => 'Apple M2 Pro Max'],
        ];
        DB::table('processor_models')->insert($processer_model);

        $display_size = [
            ['from' => 13,'to'=>null],
            ['from' => 13,'to'=>13.9],
            ['from' => 14,'to'=>14.9],
            ['from' => 15,'to'=>15.9],
            ['from' => 16,'to'=>16.9],
            ['from' => 17,'to'=>17.9],
        ];
        DB::table('display_sizes')->insert($display_size);

        $display_type = [
            ['name' => 'LED'],
            ['name' => 'OLED'],
        ];
        DB::table('display_types')->insert($display_type);

        $ram = [
            ['name' => '4 GB'],
            ['name' => '8 GB'],
            ['name' => '16 GB'],
            ['name' => '32 GB'],
            ['name' => '64 GB'],
        ];
        DB::table('rams')->insert($ram);

        $hdd = [
            ['name' => '512 MB'],
            ['name' => '1 TB'],
        ];
        DB::table('hdds')->insert($hdd);

        $ssd = [
            ['name' => '128 GB'],
            ['name' => '256 GB'],
            ['name' => '512 GB'],
            ['name' => '1 TB'],
        ];
        DB::table('ssds')->insert($ssd);

        $graphic = [
            ['name' => 'Integrated/Shared'],
            ['name' => 'Dedicated 2GB'],
            ['name' => 'Dedicated 4GB'],
            ['name' => 'Dedicated 6GB'],
            ['name' => 'Dedicated 8GB'],
        ];
        DB::table('graphics')->insert($graphic);

        $special_feature = [
            ['name' => 'Backlit Keyboard'],
            ['name' => 'Finger Print'],
            ['name' => '360 Degree'],
            ['name' => 'Touch Screen'],
            ['name' => 'Type-C Port'],
        ];
        DB::table('special_features')->insert($special_feature);

        $brand = [
            ['title' => 'Asus','slug'=>'asus'],
            ['title' => 'HP','slug'=>'hp'],
            ['title' => 'DELL','slug'=>'dell'],
            ['title' => 'Lenovo','slug'=>'lenevo'],
            ['title' => 'Acer','slug'=>'acer'],
            ['title' => 'Apple','slug'=>'aplle'],
        ];
        DB::table('brands')->insert($brand);


    }
}
