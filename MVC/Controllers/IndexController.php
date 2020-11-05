<?php

namespace Mvc\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
class IndexController{
    private $container;

    public function __construct($c){
        $this->container = $c;
    }

    public function login(Request $request, Response $response){
        $db = $this->container->get('db');
        $db->table('teste')->insert(['nome' => 'Flavio', 'email' => 'teste@gmail.com', 'senha' => '123b']);
        return view($response,'index.index',[]);
    }
    public function registrar(Request $request, Response $response){
        return view($response,'index.registrar',[]);
    }
}