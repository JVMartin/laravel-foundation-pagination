<?php
/**
 * @copyright (c) 2016 Jacob Martin
 * @license MIT https://opensource.org/licenses/MIT
 */

namespace Foundation;

use Illuminate\Support\ServiceProvider;

class FoundationServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	public function boot()
	{
		$this->loadViewsFrom(__DIR__.'/../resources/views', 'foundation');

		$this->publishes([
			__DIR__.'/../resources/views' => base_path('resources/views/vendor/foundation'),
		], 'views');
	}

	public function register()
	{
		$this->app->bind('foundation', 'Foundation\Factory');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['foundation'];
	}
}