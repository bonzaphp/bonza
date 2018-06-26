<?php
/**
 * Created by PhpStorm.
 * User: temp
 * Date: 2018/5/15
 * Time: 10:59
 */

new class
{
    public function __construct()
    {
    	self::init();
        (new \core\App())->index();
    }

	static private function init(){
		spl_autoload_register(function($className){
			$className = str_replace('\\',DIRECTORY_SEPARATOR,$className);
			require self::getRootPath().DIRECTORY_SEPARATOR.$className.'.php';
		});
	}

	static private function getRootPath()
	{
	    return dirname(dirname(__FILE__));
	}

};
