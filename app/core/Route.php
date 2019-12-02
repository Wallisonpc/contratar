<?php



namespace Core;

/**
 * Description of Route
 *
 * @author Wallison Cardoso
 */
class Route {
    private $routes;
    
    public function __construct(array $routes) {
        $this->routes = $routes;
        $this->run();
    }

    private function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
    }
    private function run(){
        echo $this->getUrl();
        
    }
    
    
}
