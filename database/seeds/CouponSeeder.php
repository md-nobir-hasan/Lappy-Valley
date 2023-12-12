<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'code'=>'abc123',
                'type'=>'fixed',
                'value'=>'300',
                'status'=>'active'
            ),
            array(
                'code'=>'111111',
                'type'=>'percent',
                'value'=>'10',
                'status'=>'active'
            ),
        );

        DB::table('coupons')->insert($data);

        $cats = [
            [
                'title' => 'Brand New',
                'slug' => Str::slug('Brand New'),
                'serial' => 2,
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Mac Book',
                'slug' => Str::slug('Mac Book'),
                'serial' => 2,
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Pre-Owned',
                'slug' => Str::slug('Pre-Owned'),
                'serial' => 5,
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Gaming Laptop',
                'slug' => Str::slug('Gaming Laptop'),
                'serial' => 6,
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Student Laptop',
                'slug' => Str::slug('Student Laptop'),
                'serial' => 4,
                'status' => 'active',
                'is_parent' => 1,
            ],

            [
                'title' => 'Asian Variant',
                'slug' => Str::slug('Asian Variant'),
                'serial' => 7,
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'USA Variant',
                'slug' => Str::slug('USA Variant'),
                'serial' => 1,
                'status' => 'active',
                'is_parent' => 1,
            ],
        ];
        DB::table('categories')->insert($cats);

        // Banner seeder (Hero section )
        $banner = [
            [
                'title' => 'Home Pag Banner',
                'slug' => Str::slug('home_page'),
                'serial' => 1,
                'photo' => '/storage/product/Hero-Image.svg,/storage/product/heroimg2.png,/storage/product/heroimg3.png',
                'description' => 'Our newest products are here,just for you!',
                'status' => 'active',
            ],
        ];
        DB::table('banners')->insert($banner);
    }


}
