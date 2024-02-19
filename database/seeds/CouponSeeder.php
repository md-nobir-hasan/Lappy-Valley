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

        //category seeder
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

        // subcategory seeder
        $cats = [
            // Brand new
            ['title' => 'Asus', 'slug' => 'brandnew-asus', 'serial' => 8, 'status' => 'active','is_parent'=>0, 'parent_id' => 1],
            ['title' => 'HP', 'slug' => 'brandnew-hp', 'serial' => 9, 'status' => 'active','is_parent'=>0, 'parent_id' => 1],
            ['title' => 'DELL', 'slug' => 'brandnew-dell', 'serial' => 10, 'status' => 'active','is_parent'=>0, 'parent_id' => 1],
            ['title' => 'Lenovo', 'slug' => 'brandnew-lenovo', 'serial' => 11, 'status' => 'active','is_parent'=>0, 'parent_id' => 1],
            ['title' => 'Apple', 'slug' => 'brandnew-apple', 'serial' => 12, 'status' => 'active','is_parent'=>0, 'parent_id' => 1],
            ['title' => 'Acer', 'slug' => 'brandnew-acer', 'serial' => 13, 'status' => 'active','is_parent'=>0, 'parent_id' => 1],

            // // Mac book
            // ['title' => 'Asus', 'slug' => 'asus', 'serial' => 8, 'status' => 'active','is_parent'=>0, 'parent_id' => 2],
            // ['title' => 'HP', 'slug' => 'hp', 'serial' => 9, 'status' => 'active','is_parent'=>0, 'parent_id' => 2],
            // ['title' => 'DELL', 'slug' => 'dell', 'serial' => 10, 'status' => 'active','is_parent'=>0, 'parent_id' => 2],
            // ['title' => 'Lenovo', 'slug' => 'lenovo', 'serial' => 11, 'status' => 'active','is_parent'=>0, 'parent_id' => 2],
            // ['title' => 'Apple', 'slug' => 'apple', 'serial' => 12, 'status' => 'active','is_parent'=>0, 'parent_id' => 2],

            // Pre-Owned
            ['title' => 'Asus', 'slug' => 'preowned-asus', 'serial' =>14, 'status' => 'active','is_parent'=>0, 'parent_id' => 3],
            ['title' => 'HP', 'slug' => 'preowned-hp', 'serial' =>15, 'status' => 'active','is_parent'=>0, 'parent_id' => 3],
            ['title' => 'DELL', 'slug' => 'preowned-dell', 'serial' => 16, 'status' => 'active','is_parent'=>0, 'parent_id' => 3],
            ['title' => 'Lenovo', 'slug' => 'preowned-lenovo', 'serial' => 17, 'status' => 'active','is_parent'=>0, 'parent_id' => 3],
            ['title' => 'Apple', 'slug' => 'preowned-apple', 'serial' => 18, 'status' => 'active','is_parent'=>0, 'parent_id' => 3],
            ['title' => 'Acer', 'slug' => 'preowned-acer', 'serial' => 19, 'status' => 'active','is_parent'=>0, 'parent_id' => 3],

            // Gaming Laptop
            ['title' => 'Asus', 'slug' => 'gamminglaptop-asus', 'serial' =>20, 'status' => 'active','is_parent'=>0, 'parent_id' => 4],
            ['title' => 'HP', 'slug' => 'gamminglaptop-hp', 'serial' =>21, 'status' => 'active','is_parent'=>0, 'parent_id' => 4],
            ['title' => 'DELL', 'slug' => 'gamminglaptop-dell', 'serial' => 22, 'status' => 'active','is_parent'=>0, 'parent_id' => 4],
            ['title' => 'Lenovo', 'slug' => 'gamminglaptop-lenovo', 'serial' => 23, 'status' => 'active','is_parent'=>0, 'parent_id' => 4],
            ['title' => 'Apple', 'slug' => 'gamminglaptop-apple', 'serial' => 24, 'status' => 'active','is_parent'=>0, 'parent_id' => 4],
            ['title' => 'Acer', 'slug' => 'gamminglaptop-acer', 'serial' => 25, 'status' => 'active','is_parent'=>0, 'parent_id' => 4],

            // Student Laptop
            ['title' => 'Asus', 'slug' => 'studentlaptop-asus', 'serial' =>26, 'status' => 'active','is_parent'=>0, 'parent_id' => 5],
            ['title' => 'HP', 'slug' => 'studentlaptop-hp', 'serial' =>27, 'status' => 'active','is_parent'=>0, 'parent_id' => 5],
            ['title' => 'DELL', 'slug' => 'studentlaptop-dell', 'serial' => 28, 'status' => 'active','is_parent'=>0, 'parent_id' => 5],
            ['title' => 'Lenovo', 'slug' => 'studentlaptop-lenovo', 'serial' => 29, 'status' => 'active','is_parent'=>0, 'parent_id' => 5],
            ['title' => 'Apple', 'slug' => 'studentlaptop-apple', 'serial' => 30, 'status' => 'active','is_parent'=>0, 'parent_id' => 5],
            ['title' => 'acer', 'slug' => 'studentlaptop-acer', 'serial' => 31, 'status' => 'active','is_parent'=>0, 'parent_id' => 5],

            // Asian Variant
            ['title' => 'Asus', 'slug' => 'asianvariant-asus', 'serial' =>32, 'status' => 'active','is_parent'=>0, 'parent_id' => 6],
            ['title' => 'HP', 'slug' => 'asianvariant-hp', 'serial' =>22, 'status' => 'active','is_parent'=>0, 'parent_id' => 6],
            ['title' => 'DELL', 'slug' => 'asianvariant-dell', 'serial' => 24, 'status' => 'active','is_parent'=>0, 'parent_id' => 6],
            ['title' => 'Lenovo', 'slug' => 'asianvariant-lenovo', 'serial' => 35, 'status' => 'active','is_parent'=>0, 'parent_id' => 6],
            ['title' => 'Apple', 'slug' => 'asianvariant-apple', 'serial' => 36, 'status' => 'active','is_parent'=>0, 'parent_id' => 6],
            ['title' => 'Acer', 'slug' => 'asianvariant-acer', 'serial' => 37, 'status' => 'active','is_parent'=>0, 'parent_id' => 6],

            // Asian Variant
            ['title' => 'Asus', 'slug' => 'usavariant-asus', 'serial' =>38, 'status' => 'active','is_parent'=>0, 'parent_id' => 7],
            ['title' => 'HP', 'slug' => 'usavariant-hp', 'serial' =>39, 'status' => 'active','is_parent'=>0, 'parent_id' => 7],
            ['title' => 'DELL', 'slug' => 'usavariant-dell', 'serial' => 40, 'status' => 'active','is_parent'=>0, 'parent_id' => 7],
            ['title' => 'Lenovo', 'slug' => 'usavariant-lenovo', 'serial' => 41, 'status' => 'active','is_parent'=>0, 'parent_id' => 7],
            ['title' => 'Apple', 'slug' => 'usavariant-apple', 'serial' => 42, 'status' => 'active','is_parent'=>0, 'parent_id' => 7],
            ['title' => 'Acer', 'slug' => 'usavariant-acer', 'serial' => 43, 'status' => 'active','is_parent'=>0, 'parent_id' => 7],
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

        // Banner seeder (Hero section )
        $divissio = [
            ['name' => 'Dhaka'],
            ['name' => 'Barisal'],
            ['name' => 'Mymensingh'],
            ['name' => 'Chittagong'],
            ['name' => 'Sylhet'],
            ['name' => 'Rangpur'],
            ['name' => 'Rajshahi '],
        ];
        DB::table('divissions')->insert($divissio);


        // Shipping seeder
        $shipping = [
            [
                'type' => 'Store Pickup',
                'price' => 0,
                'through' => null,
                'status' => 'active',
            ],
            [
                'type' => 'Request Express delivery',
                'price' => 120,
                'through' => 'Through SA P.B',
                'status' => 'active',
            ],
        ];
        DB::table('shippings')->insert($shipping);

        // order_status seeder
        $order_status = [
            [
                'title' => 'New',
                'slug' => 'New',
                'status' => 'active',
                'delete'=>1,
            ],
            [
                'title' => 'Pending',
                'slug' => 'Pending',
                'status' => 'active',
                'delete'=>1,
            ],
            [
                'title' => 'Processing',
                'slug' => 'Processing',
                'status' => 'active',
                'delete'=>1,
            ],
            [
                'title' => 'Delivered',
                'slug' => 'Delivered',
                'status' => 'active',
                'delete'=>0,
            ],

            [
                'title' => 'Canceled',
                'slug' => 'canceled',
                'status' => 'active',
                'delete'=>0,
            ],
        ];
        DB::table('order_statuses')->insert($order_status);
    }





}
