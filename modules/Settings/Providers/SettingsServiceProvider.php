<?php namespace Orchid\Settings\Providers;

use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the application events.
	 * 
	 * @return void
	 */
	public function boot()
	{
		$this->registerConfig();
		$this->registerDatabase();

	}

	/**
	 * Register config.
	 *
	 * @return void
	 */
	protected function registerConfig()
	{
		$this->publishes([
			__DIR__ . '/../Config/settings.php' => config_path('cache.php'),
		]);
		$this->mergeConfigFrom(
			__DIR__ . '/../Config/settings.php', 'cache'
		);
	}

	protected function registerDatabase()
	{
		$this->publishes([
			__DIR__ . '/../database/migrations/' => database_path('migrations'),
		], 'migrations');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
