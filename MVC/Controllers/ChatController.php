<?php

namespace Mvc\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
class ChatController{
    private $container;

    public function __construct($c){
        $this->container = $c;
    }

    public function home(Request $request, Response $response){
        return view($response,'chat.chat',[]);
    }
}