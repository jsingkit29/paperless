<?php

namespace App\Providers;


use App\Helper\TemplatePlugin;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Schema::defaultStringLength(191);

        if(config('app.env') === 'production') {
            URL::forceScheme('https');
        }

        $templatePlugin = new TemplatePlugin();

        view()->share(
            'templatePlugin', $templatePlugin
        );
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
