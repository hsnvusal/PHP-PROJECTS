<?php


namespace App\Providers;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        setlocale(LC_TIME,"tr_TR");
        Carbon::setLocale("tr");

        config()->set("ayarlar",\App\Models\Ayar::pluck("value","name")->all());
    }
}
