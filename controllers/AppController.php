<?php
/**
 * Created by PhpStorm.
 * User: Dives
 * Date: 23.10.2018
 * Time: 18:40
 */

class AppController
{


    private $request;


    public function __construct($request)
    {
        $this->request = strtolower($_SERVER['REQUEST_METHOD']);
    }


    public function isGet()
    {
        return $this->request ==='get';
    }

    public function isPost()
    {
        return $this->request ==='post';
    }

    public function render( $fileName)
    {
        $path = dirname(__DIR__)."/views/".get_class($this)."/".$fileName.'.php';
    }
}