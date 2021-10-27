<?php

namespace HelloWorld;

use Illuminate\Support\Facades\Facade;

class HelloWorldFacade extends Facade
{
    public static function getFacadeAccessor()
    {
        return HelloWorldService::class;
    }
}