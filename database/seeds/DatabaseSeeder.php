<?php

use App\Models\Category;
use App\Models\Product;
use Database\Seeders\CategorySeeder;
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

        $this->call(UsersTableSeeder::class);
        $this->call(SettingTableSeeder::class);
        $this->call(CouponSeeder::class);
        // $this->call(CategorySeeder::class);

        Category::factory()->count(35)->create();
        Product::factory()->count(100)->create();

    }
}
