<?php

namespace HelloWorld;

class HelloWorldService
{
    /**
     * @param array $params
     * 
     * @return string
     */
    public function print(array $params = [])
    {
        $configs = config('hello_world');
        $configs = array_merge($configs, $params);

        return $configs['description'];
    }
}