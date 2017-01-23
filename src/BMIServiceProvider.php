<?php

namespace Montoya\BMI;

use Illuminate\Support\ServiceProvider;

class BMIServiceProvider extends ServiceProvider
{
	public function boot(){
		include __DIR__ . '/routes.php';
		//$this->loadviewsFrom(__DIR__ . '/view','bmi');
	}
	public function register(){
		$this->app['bmi'] = $this->app->share(function ($app) {
			return new BMI;
		});
	}
} 