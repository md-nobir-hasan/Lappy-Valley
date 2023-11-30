<?php

use App\Models\Category;
use App\Models\Product;
use Database\Seeders\RolePermissionSeeder;
use Database\Seeders\ProductAttributeSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use HasFactory;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            ProductAttributeSeeder::class,
            UsersTableSeeder::class,
            RolePermissionSeeder::class,
            SettingTableSeeder::class,
            CouponSeeder::class,
        ]);


        Category::factory()->count(35)->create();
        Product::factory()->count(100)->create();

    }
}
