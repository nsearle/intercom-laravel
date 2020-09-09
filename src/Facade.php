<?php

namespace Weav\IntercomLaravel;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Facade extends IlluminateFacade
{
    public static function getFacadeAccessor()
    {
        return 'intercom';
    }
}
