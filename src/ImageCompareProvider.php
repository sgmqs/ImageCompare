<?php namespace Sunshine\ImageCompare;

use Illuminate\Support\ServiceProvider;

class ImageCompareProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('imagecompare', function($app)
		{
			return new ImageCompare;
		});
		$this->app->alias('imagecompare', 'Sunshine\ImageCompare');
		$this->app->alias('ImageCompare', 'Sunshine\ImageCompare\Facades\ImageCompare');

	}

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['imagecompare'];
    }
}
