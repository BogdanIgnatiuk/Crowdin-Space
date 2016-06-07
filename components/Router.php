<?php

class Router {

    private $routes;
    
    public function __construct() {
    
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
        
    }
    
    /*
    *       повертає стрічку запиту
    *       return string
    */
    
    private function getURI() {
    
        if (!empty($_SERVER['REQUEST_URI'])) {
            $uri = explode('/', $_SERVER['REQUEST_URI']);
            
            unset($uri[0], $uri[1], $uri[2]);
            
            $n = count($uri);
            $uri = array_values($uri);

            $st = '';
            for ($i = 0; $i < $n; $i++ ) {
                $st = $st.'/'.$uri[$i];    
            
            }
            
            return  trim($st, '/');
        }
    }
    
    public function run() {
    
        // Отримати стрічку запиту
        
        $uri = $this->getURI();
        
        // шукаємо таку стрічку у routes
        foreach ($this->routes as $uriPattern => $path)  {
            
            // порівнюємо стрічку запиту з routes
            if (preg_match("~$uriPattern~", $uri)) {
                
                //отрмуємо внутрішній код запиту
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                
                // визначити конкретний controller і action
                $segments = explode('/', $internalRoute);
                
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                
                $actionName = 'action'.ucfirst(array_shift($segments));
                
                $parameters = $segments;
                
                // підключити файл класу-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                
                if (file_exists($controllerFile))
                    include_once($controllerFile);
                
                // створення об'єкту класу-контроллера, виклик його методу
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                if ($result != null)
                    break;
            }
        }
    }
}
?>
