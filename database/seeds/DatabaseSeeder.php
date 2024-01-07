<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductReview;
use Database\Seeders\RolePermissionSeeder;
use Database\Seeders\ProductAttributeSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

// dd();
        // Category::factory()->count(35)->create();
        Product::factory()->count(100)->create();
        // DB::unprepared(file_get_contents(base_path('needs/seeder/categories.sql')));
        // DB::unprepared(file_get_contents(base_path('needs/seeder/product_seed.sql')));
        //ProductReview::factory()->count(10)->create();

    }
}
