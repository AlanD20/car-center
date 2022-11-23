<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('path.public', function () {
            return \base_path() . '/../public_html';
        });
        // $target = storage_path('app/public_html');
        // $link = base_path('/../public_html/uploads');
        // if (is_link($link)) {
        //     $this->app->make('files')->delete($link);
        // }
        // $this->app->make('files')->link($target, $link);
    }
}
