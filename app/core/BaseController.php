<?php



namespace Core;


abstract class BaseController {

    protected $view;
    protected $auth;
    protected $errors;
    protected $inputs;
    protected $success;
    private $viewPath;
     private $layoutPath;
     private $pageTitle = null;
     


    public function __construct(){
       $this-> view = new \stdClass;
       $this->auth = new Auth;
        if (Session::get('errors')) {
            $this->errors = Session::get('errors');
            Session::destroy('errors');
        }
        if (Session::get('inputs')) {
            $this->inputs = Session::get('inputs');
            Session::destroy('inputs');
        }
        if (Session::get('success')) {
            $this->success = Session::get('success');
            Session::destroy('success');
        }
}

protected function renderView($viewPath, $layoutPath=null){
    $this->viewPath = $viewPath;
    $this->layoutPath = $layoutPath;
    if ($layoutPath) {
        $this->layout();
     }else {
     $this->content();
     } 
}
protected function content (){
    if (file_exists(__DIR__ . "/../app/Views/{$this->viewPath}.phtml")) {
        require_once __DIR__ . "/../app/Views/{$this->viewPath}.phtml";
    } else {
        echo" Error: View path not found";
    }
}
 
protected function layout (){
    if (file_exists(__DIR__ . "/../app/Views/{$this->layoutPath}.phtml")) {
        require_once __DIR__ . "/../app/Views/{$this->layoutPath}.phtml";
    } else {
        echo" Error: layout path not found";
    }
}

protected function setPageTitle($pageTitle){
    $this->pageTitle = $pageTitle;
       
}

protected function getPageTitle($separator=null){
    if ($separator) {
        echo  $this->pageTitle . " " . $separator . " ";
        
    }else {
        echo $this-> pageTitle;
        
    }
    
}
public function forbiden(){
    return Redirect::route('/login');
}
    
}
