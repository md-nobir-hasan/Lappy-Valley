<?php

namespace App\Providers;

use App\Models\OtherSetting;
use App\Models\Settings;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
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
        Schema::defaultStringLength(191);
        // Paginator::useBootstrapFour();
        $n =[];
        if(Schema::hasTable('settings')){
            $n['setting'] = Settings::first();
        }
        if(Schema::hasTable('other_settings')){
            $n['other_setting'] = OtherSetting::first();
        }
        View::share($n);
    }
}
