<?php

spl_autoload_register('myAUtoLoader');

function myAUtoLoader($className){
    $url=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if(strpos($url,'includes')!==false)
    {
        $path='../classess/';
    }
    else{
        $path='classess/';
    }
    $extension=".class.php";
    $fullPath = $path. $className. $extension;

    include_once $fullPath;
    
} 

?>