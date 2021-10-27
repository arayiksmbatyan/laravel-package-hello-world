<?php

namespace HelloWorld;

class HelloWorldService
{
    public function print(array $params = [])
    {
        $configs = config('hello_world');
        $configs = array_merge($configs, $params);

        return $configs['description'];
    }
}