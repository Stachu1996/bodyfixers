<?php

namespace App\Providers;

use App\Contracts\ClientContract;
use App\Contracts\PacketContract;
use App\Repositories\ClientRepository;
use App\Repositories\PacketRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        PacketContract::class       =>      PacketRepository::class,
        ClientContract::class       =>      ClientRepository::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
