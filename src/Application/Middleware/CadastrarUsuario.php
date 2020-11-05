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
        $usuario = Usuario::where('email', '=',$dados['email'])->first();
        $acesso = true;
        $response = $handler->handle($request);
        foreach($dados as $dado){ //todos os campos presicam conter pelo menos 3 caracteres
            if(count($dado) < 3){
                $acesso = false;
            }
        }
        if(is_null($usuario)){
            Usuario::Create($dados);
            return view($response,'index.registro',['cadastro' => 1]);
        }else{
            return view($response,'index.registro',['cadastro' => 0]);
        }
    }
}