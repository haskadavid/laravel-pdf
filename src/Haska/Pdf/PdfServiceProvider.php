<?php namespace Haska\Pdf;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class PdfServiceProvider extends IlluminateServiceProvider {

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
		$this->package('haska/laravel-pdf');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['dompdf'] = $this->app->share(function($app)
            {
                return new Pdf;
            });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('dompdf');
	}

}