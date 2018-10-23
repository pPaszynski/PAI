<?php
/**
 * Created by PhpStorm.
 * User: Dives
 * Date: 23.10.2018
 * Time: 18:41
 */

require_once('controllers/DefaultController.php');

class Routing
{

    public $routes = [];

    public function __construct()
    {
        $this->routes = [
            'index' => [
                'controller' => 'DefaultController',
                'acton' => 'home'],
            'login' => [
                'controller' => 'DefaultController',
                'acton' => 'login',
            ]
        ];
    }

    public function run(){
        //localhgost:8000?page=login
        $page = isset($_GET['page'])
             && isset($this->routes[$_GET['page']])
             ? $_GET['page'] : 'index';

if($this->routes[$page]){
            $controller = $this->routes['controller'];
            $action = $this->routes['action'];

            $object = new $controller;
            $object->$action();

        }
    }
}