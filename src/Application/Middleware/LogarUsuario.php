<?php

namespace App\Application\Middleware;


use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;
use Slim\Psr7\Response;
use Mvc\Models\Usuario;

class LogarUsuario
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
        $usuario = Usuario::where('email', '=',$dados['email'])->first();
        $acesso = false;
        $response = $handler->handle($request);
        $isNotNull = !(is_null($usuario));
        if($isNotNull){
            if(md5($dados['senha']) == $usuario['senha']){//sucesso
                $_SESSION['id'] = $usuario['id'];
                $usuario->update(['status'=> 1]);
                return $response->withHeader('Location', '/home');
            }else{ //senha errada
                return $response->withHeader('Location', '/?erro=senha');
            }
        }else{ // email errado
            return $response->withHeader('Location', '/?erro=email');

        }
    }
}