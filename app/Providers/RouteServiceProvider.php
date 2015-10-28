<?php namespace Mautab\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;


class RouteServiceProvider extends ServiceProvider
{

    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Mautab\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);


        $router->bind('pages', function ($value) {
            return \Mautab\Models\Page::where('slug', $value)->firstOrFail();
        });


        $router->bind('package', function ($value) {
            return \Mautab\Models\Package::findOrFail($value);
        });

        $router->bind('news', function ($value) {
            return \Mautab\Models\News::where('slug', $value)->firstOrFail();
        });


        $router->bind('users', function ($value) {
            return \Mautab\Models\User::findOrFail($value);
        });


        $router->bind('tikets', function ($value) {
            return \Mautab\Models\Tiket::findOrFail($value);
        });


        $router->bind('roles', function ($value) {
            return \Mautab\Models\Roles::where('slug', $value)->firstOrFail();
        });


        $router->bind('settings', function ($value) {
            return \Mautab\Models\Setting::where('slug', $value)->firstOrFail();
        });

        $router->bind('type', function ($value) {
            return \Mautab\Models\Type::where('slug', $value)->firstOrFail();
        });


        $router->bind('block', function ($value) {
            return \Mautab\Models\Block::where('slug', $value)->firstOrFail();
        });


        $router->bind('element', function ($value) {
            return \Mautab\Models\Element::findOrFail($value);
        });


    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }

}
