<?php

namespace VoyagerBread;

use Riak\Connection;
use Illuminate\Support\ServiceProvider;
use VoyagerBread\Commands\BreadGenerator;

class BreadGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(BreadGenerator::class);
    }
}
