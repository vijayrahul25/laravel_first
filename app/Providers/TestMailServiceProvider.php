<?php

namespace App\Providers;

use App\Mail\TestMailService;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;


class TestMailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('testmailservice', function ($app) {
            return new TestMailService();
          });
    }
}
