<?php
declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Mvc\Controllers\ChatController;
use Mvc\Controllers\IndexController;
use App\Application\Middleware\CadastrarUsuario;
return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });
    //Pagina de login
    $app->get('/',[new IndexController($app->getContainer()), 'login']);
    //Pagina de Registro
    $app->get('/registro',[new IndexController($app->getContainer()), 'registro']);

    $app->post('/registrar',[new IndexController($app->getContainer()), 'registrar'])->add(new CadastrarUsuario);

    //Pagina dentro da aplicação
    $app->get('/home',[new ChatController($app->getContainer()), 'home']);

};
