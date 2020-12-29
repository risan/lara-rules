<?php

namespace Risan\LaraRules;

use Illuminate\Support\ServiceProvider;

class LaraRulesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/usStateCodes.php' => config_path('usStateCodes.php'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/usStateCodes.php', 'usStateCodes');
    }
}