<?php

namespace App\Providers;

use App\Repository\IQuoteRepository;
use App\Repository\QuoteRepositoryFile;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceprovider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IQuoteRepository::class,QuoteRepositoryFile::class);
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
