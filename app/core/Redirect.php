<?php

namespace Core;

/**
 * Description of Redirect
 *
 * @author Wallison Cardoso
 */


class Redirect {

    public static function route ($url, $with = []){
        if (count($with) >0)           
            foreach ($with as $key => $value)
                session::set ($key, $value);
        return header("location:$url");
    }
    
}
