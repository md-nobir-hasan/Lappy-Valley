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
                'serial' => rand(1, 11),
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Pre-Owned',
                'slug' => Str::slug('Pre-Owned'),
                'serial' => rand(1, 11),
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Student Laptop',
                'slug' => Str::slug('Student Laptop'),
                'serial' => rand(1, 11),
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Business Laptop',
                'slug' => Str::slug('Business Laptop'),
                'serial' => rand(1, 11),
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Work Station',
                'slug' => Str::slug('Work Station'),
                'serial' => rand(1, 11),
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'Asian Variant',
                'slug' => Str::slug('Asian Variant'),
                'serial' => rand(1, 11),
                'status' => 'active',
                'is_parent' => 1,
            ],
            [
                'title' => 'USA Variant',
                'slug' => Str::slug('USA Variant'),
                'serial' => rand(1, 11),
                'status' => 'active',
                'is_parent' => 1,
            ],
        ];
        DB::table('categories')->insert($cats);
    }
}
