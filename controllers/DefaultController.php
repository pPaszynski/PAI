<?php
/**
 * Created by PhpStorm.
 * User: Dives
 * Date: 23.10.2018
 * Time: 18:41
 */
require_once("AppController.php");

class DefaultController extends AppController
{

    public function home(){
        //render
        $this->render('home');
    }

    public function login(){
        //render
        $this->render('login');
    }
}