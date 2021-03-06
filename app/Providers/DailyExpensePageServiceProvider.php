<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class DailyExpensePageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $page = '';

        if(Request::segment(1) == 'expense') {
          $page = 'expense';
        }

        if(Request::segment(1) == 'goods') {
          $page = 'goods';
        }

        if(Request::segment(1) == 'others') {
          $page = 'others';
        }

        if(Request::segment(1) == 'shopping') {
          $page = 'shopping';
        }

        if(Request::segment(1) == 'shopping_details') {
          $page = 'shopping_details';
        }

        if(Request::segment(1) == 'shops') {
          $page = 'shops';
        }

        if(Request::segment(1) == 'transportation') {
          $page = 'transportation';
        }

        if(Request::segment(1) == 'users') {
          $page = 'users';
        }

        if(Request::segment(1) == 'vehicle_type') {
          $page = 'vehicle_type';
        }

        view()->share('page', $page);
    }
}
