<?php

namespace App\Application\Middleware;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;
use Mvc\Models\Usuario;

class CadastrarUsuario
{
    /**
     * Example middleware invokable class
     *
     * @param  ServerRequest  $request PSR-7 request
     * @param  RequestHandler $handler PSR-15 request handler
     *
     * @return Response
     */
    public function __invoke(Request $request, RequestHandler $handler): Response
    {
        $dados = $request->getParsedBody();
        $response = $handler->handle($request);
        $usuario = Usuario::where('email', '=',$dados['email'])->first();
        if(is_null($usuario)){
            Usuario::Create($dados);
        }
        return $response;
    }
}