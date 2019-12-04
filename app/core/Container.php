<?php


namespace Core;


class Container {
public static function newController ($contoller)
{
    $objContoller = "App\\controllers\\" . $contoller;
    return new $objContoller;
    
}


        
}
