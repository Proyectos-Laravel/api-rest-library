<?php

namespace App\Providers;

use App\Contracts\API\Auth\AuthServiceInterface;
use App\Services\API\V1\AuthSanctumService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        
        $this->app->bind(
            AuthServiceInterface::class,
            AuthSanctumService::class
        );
    }

    public function boot(): void
    {

    }
}
