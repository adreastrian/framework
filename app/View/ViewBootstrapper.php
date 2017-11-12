<?php

namespace Glue\App\View;

class ViewBootstrapper
{
	public function booting($plugin)
	{
		$plugin->bind('view', function($plugin) {
			return new View($plugin);
		}, 'View');
	}
}