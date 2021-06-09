<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->bind("meta-title", \App\Analyzers\MetaTitle::class);
        $this->app->bind("meta-description", \App\Analyzers\MetaDescription::class);
        $this->app->bind("open-graph", \App\Analyzers\OpenGraph::class);
        $this->app->bind("tw-card", \App\Analyzers\TwCard::class);
        $this->app->bind("meta-robots", \App\Analyzers\MetaRobots::class);
        $this->app->bind("meta-keyword", \App\Analyzers\MetaKeyword::class);
        $this->app->bind("charset", \App\Analyzers\Charset::class);
        $this->app->bind("viewport", \App\Analyzers\Viewport::class);
        $this->app->bind("canonical", \App\Analyzers\Canonical::class);
        $this->app->bind("hreflang", \App\Analyzers\Hreflang::class);
    }
}
