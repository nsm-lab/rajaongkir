<?php namespace Bcscoder\Rajaongkir;

use Illuminate\Support\ServiceProvider;

class RajaongkirServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('bcscoder/rajaongkir');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;

		$this->app['rajaongkir'] = $this->app->share(function($app)
	    {
	        return new RajaOngkir($app['config']->get('rajaongkir::key'));
	    });
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
