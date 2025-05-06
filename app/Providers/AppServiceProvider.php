<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Repositories\RepositorioRolInterface;
use App\Domain\Repositories\RepositorioRol;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
{
    $this->app->bind(
        \App\Domain\Repositories\RepositorioPermisoInterface::class,
        \App\Domain\Repositories\RepositorioPermiso::class
    );

    // El binding ya existente para roles.
    $this->app->bind(
        \App\Domain\Repositories\RepositorioRolInterface::class,
        \App\Domain\Repositories\RepositorioRol::class
    );

}


}
