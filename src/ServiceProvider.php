<?php

namespace Weav\IntercomLaravel;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    public function register()
    {
        $this->app->bind('intercom', function () {
            $id = Config::get('services.intercom.app_id');
            $key = Config::get('services.intercom.api_key');

            return new IntercomLaravel($id, $key);
        });
    }
}
