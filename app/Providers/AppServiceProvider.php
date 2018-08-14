<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Carbon::setLocale('zh');
        \App\Models\Topic::observe(\App\Observers\TopicObserver::class);
    }

    public function register()
    {
        //
    }
}
