<?php

use App\Models\Category;
use App\Models\Product;
// use Database\Seeders\CategorySeeder;
use Database\Seeders\RolePermissionSeeder;
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
            UsersTableSeeder::class,
            RolePermissionSeeder::class,
            SettingTableSeeder::class,
            CouponSeeder::class,
        ]);


        Category::factory()->count(35)->create();
        Product::factory()->count(100)->create();

    }
}
