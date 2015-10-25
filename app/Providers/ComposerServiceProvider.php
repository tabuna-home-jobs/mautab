<?php namespace Mautab\Providers;

use Illuminate\Support\ServiceProvider;
use Mautab\Http\Composers\UserInfoComposer;
use View;

class ComposerServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Композер реализуется при помощи класса:
        View::composer('user.*', UserInfoComposer::class);
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        //
    }

}