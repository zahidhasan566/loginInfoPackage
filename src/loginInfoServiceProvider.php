<?php

namespace LoginInfo;

use Carbon\Laravel\ServiceProvider;

class loginInfoServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/loginInfo.php', 'loginInfo'
        );
        $this->publishes([
            __DIR__.'/config/loginInfo.php'=>config_path('loginInfo.php'),
        ]);
    }
    public function register()
    {

    }
}
