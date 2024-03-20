<?php

namespace App\Providers;

use App\Stock;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use App\Setting;
use Session;
use Illuminate\Support\Facades\Gate;

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
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super-Admin') ? true : null;
        });
        $setting = Setting::first();
        Session::put('settings_app_name', $setting->app_name);
        Session::put('settings_restaurant_name', $setting->restaurant_name);
        Session::put('settings_restaurant_address', $setting->restaurant_address);
        Session::put('settings_contact_number', $setting->contact_number);
        Session::put('settings_restaurant_logo', $setting->restaurant_logo);
    $today_stocks = Stock::whereDate('from_date', Carbon::today())->where('remaining_quantity', '>', 0)->get();
    view()->share('today_stocks', $today_stocks);
    }
}
