<?php

namespace Mvc\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
//Models
use Mvc\Models\Usuario;
use Mvc\Models\Message;
class ChatController{
    private $container;

    public function __construct($c){
        $this->container = $c;
    }

    public function home(Request $request, Response $response){
        $usuarios = Usuario::where('id','!=',$_SESSION['id'])->get();
        return view($response,'chat.chat',['usuarios' => $usuarios]);
    }
    public function chat(Request $request, Response $response,$args){
        $id = $args['id'];
        $_SESSION['id'] = 17;
        $chat =  Usuario::select('chat.id','chat.id_user1','chat.id_user2')->where('usuarios.id', '=',$_SESSION['id'])->join('chat',function($join){ //Buscando todos os chats onde o usuario logado esta participando
            $join->on('usuarios.id','=','chat.id_user1')->orOn('usuarios.id','=','chat.id_user2');
        })->get();
        $chat = count($chat->where('id_user1','=',$id)) != 0 ? $chat->where('id_user1','=',$id)->first() : $chat->where('id_user2','=',$id)->first(); // buscando o  chat do contato que o usuario selecionou

        $chat_id = $chat->id; //id do chat entre o usuario clickado e o usuario logado
        $mensagens = Message::where('id_chat','=',$chat_id)->get(); //recuperando as mensagens referente a esse chat
        


        $mensagens = json_encode($chat);
        $response->getBody()->write($mensagens);
        return $response->withHeader('Content-Type','Application/json');
    }
}