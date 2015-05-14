<?php
namespace Sunshine\ImageCompare\Facades;

use Illuminate\Support\Facades\Facade;

class ImageCompare extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'imagecompare';
	}
}