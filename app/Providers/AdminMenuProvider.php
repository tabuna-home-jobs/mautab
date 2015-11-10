<?php namespace Mautab\Providers;

use Illuminate\Support\ServiceProvider;

class AdminMenuProvider extends ServiceProvider
{

    /**
     * Устанавливаем отложенный сервис провайдер
     * @var bool
     */
    protected $defer = true;

    /**
     * Register any application services.
     *
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AdminMenu::class, function ($app) {
            return new AdminMenu();
        });
    }

    public function provides()
    {
        return [AdminMenu::class];
    }


}
