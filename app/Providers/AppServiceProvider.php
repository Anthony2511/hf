<?php

namespace App\Providers;

use App\Models\Competition;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $competitions = Competition::where('isFinish', 'finish')->orderBy('startDate', 'DESC')->get();
        View::share('competitions', $competitions);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
