<?php
declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Mvc\Controllers\ChatController;
use Mvc\Controllers\IndexController;
use App\Application\Middleware\CadastrarUsuario;
use App\Application\Middleware\LogarUsuario;
return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });
    //Pagina de login
    $app->get('/',[new IndexController($app->getContainer()), 'login']);
    //Pagina de logar
    $app->post('/logar',function(Request $request, Response $response){return $response;})->add(new LogarUsuario);
    //Pagina de Registro
    $app->get('/registro',[new IndexController($app->getContainer()), 'registro']);
    //cadastrar usuario
    $app->post('/registrar',function(Request $request, Response $response){return $response;})->add(new CadastrarUsuario);

    //Pagina dentro da aplicação
    $app->get('/home',[new ChatController($app->getContainer()), 'home']);

    $app->get('/chat/{id}',[new ChatController($app->getContainer()), 'chat']);


};
