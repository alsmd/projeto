<?php

namespace Mvc\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
//Models
use Mvc\Models\Usuario;
class IndexController{
    private $container;

    public function __construct($c){
        $this->container = $c;
    }

    public function login(Request $request, Response $response){
        return view($response,'index.index',[]);
    }

    public function registro(Request $request, Response $response){
        return view($response,'index.registro',[]);
    }
}