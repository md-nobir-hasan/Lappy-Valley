<?php

namespace App\Providers;

use App\Models\gtag;
use App\Models\OtherSetting;
use App\Models\Pixel;
use App\Models\Product;
use App\Models\Settings;
use FontLib\Table\Type\name;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $n = [];
        if (Schema::hasTable('settings')) {
            $n['setting'] = Settings::first();
        }
        if (Schema::hasTable('other_settings')) {
            $n['other_setting'] = OtherSetting::first();
        }
        if (Schema::hasTable('pixels')) {
            $n['pixels'] = Pixel::first();
        }
        if (Schema::hasTable('gtags')) {
            $n['gtags'] = gtag::first();
        }
        View::share($n);
    }
}
