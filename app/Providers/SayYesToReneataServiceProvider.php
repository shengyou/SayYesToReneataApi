<?php

namespace App\Providers;

use App\Contracts\SayYesToReneataContract;
use App\Generators\GoodWishImageGenerator;
use App\Services\Image\GoodWishImageService;
use Illuminate\Support\ServiceProvider;

class SayYesToReneataServiceProvider extends ServiceProvider
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
        $this->app->singleton(SayYesToReneataContract::class, function () {
            $image = app(GoodWishImageGenerator::class);

            return new GoodWishImageService($image);
        });
    }
}
