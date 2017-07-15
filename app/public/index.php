<?php

	$url=$_SERVER['REQUEST_URI'];
	$path=explode('/',substr($url,1));
    spl_autoload_register(function ($className)
    {
        $className=lcfirst($className);
        $className=str_replace('_','/',$className);
        require('../'.$className.'.php');
    });
	$obj=new system_route($path);
?>