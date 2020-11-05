<?php
use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;

if(! function_exists('view')){
    function view(Response $response, $template, $with = []){
        $view =  __DIR__ .'/../MVC/Views';
        $cache = __DIR__ .'/../cache';
        $blade = (new Blade($view, $cache))->make($template,$with);
        $response->getBody()->write($blade->render());
        return $response;
    }
}

function teste(){
    return 'pegando';
}