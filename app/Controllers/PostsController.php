<?php



namespace App\Controllers;

use Core\BaseController;


class PostsController extends \Core\BaseController {

   public function index(){
    echo "Posts";
    }
    
    public function show ($id, $request){
        echo $id . '<br>';
        echo $request -> get -> nome . '<br>';
        echo $request -> get -> sexo . '<br>';
        
        
    }
    
}
