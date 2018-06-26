<?php
/**
 * Created by PhpStorm.
 * User: temp
 * Date: 2018/5/15
 * Time: 11:03
 */

namespace core;

use config\Config;

class App
{

    public function __construct()
    {
        // self::$rootPath = $root;
    }

    public function index()
    {
        $config = new Config();
        $this->config($config);
    }

    private function config(Config $config)
    {
        var_dump($config->returnConfig());
    }

}
