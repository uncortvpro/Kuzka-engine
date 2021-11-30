<?php
require 'application/libs/Dev.php';
use application\core\Route;
use application\libs\Db;
spl_autoload_register(function($class){
   $path=str_replace('\\','/',$class.'.php');

   if(file_exists($path)){
      require $path;
   }
});
session_start();
$router=new Route;
$router->run();
