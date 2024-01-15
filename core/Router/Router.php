<?php

namespace Core\Router;

use App\Controller\HomeController;
use Core\Http\Request;

class Router
{
    /**
     * @var Route[]
     */
    private array $routes;


    public function addRoute(array $route){
        $this->routes[$route['route']] = $route['c&m'];
    }

    public function getRoutes()
    {
        ////récupérer tous les attributs Route de tous les controllers
        ///pour ca, recuperer toutes les classes du namespace App\Controller
        /// foreach($controllers as controller)
        /// pour chaque controller, utiliser ReflectionClass
        /// depuis reflection class  : getAttributes (Core\Attributes\Route::class)
        ///  pour chaque attribut de classe Route, récupere l'argument "uri"
        ///
        ///  créer un objet Core\Route\Route
        /// lui donner l'uri depuis l'attribut
        /// lui donner le controller et la methode en cours (en itération)
        ///
        /// quand la route est créée, la passer à addRoutes
    }



    public function getControllerAndMethod(Request $request){

        $globals = $request->getGlobals();
        $uri = $globals['REQUEST_URI'];

        $controllerAndMethod = $this->getControllerAndMethodFromUri($uri);


//        $controller = HomeController::class;
//        $method = "index";

        return $controllerAndMethod;
    }

    private function getControllerAndMethodFromUri(string $uri){

        foreach($this->routes as $routeUri=>$controllerAndMethod){

            if($routeUri === $uri){
                return $controllerAndMethod;
            }
        }
    }


}