<?php

namespace Mvc\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
//Models
use Mvc\Models\Usuario;
use Mvc\Models\Message;
use Mvc\Models\Chat;
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
        //$_SESSION['id'] = 17;
        $chat =  Usuario::select('chats.id','chats.id_user1','chats.id_user2')->where('usuarios.id', '=',$_SESSION['id'])->join('chats',function($join){ //Buscando todos os chats onde o usuario logado esta participando
            $join->on('usuarios.id','=','chats.id_user1')->orOn('usuarios.id','=','chats.id_user2');
        })->get();
        $chat = count($chat->where('id_user1','=',$id)) != 0 ? $chat->where('id_user1','=',$id)->first() : $chat->where('id_user2','=',$id)->first(); // buscando o  chat do contato que o usuario selecionou
        if(is_null($chat)){ //cria um novo chat caso não ainda não exista
            $chat = Chat::criar_chat($id,$_SESSION['id']);
        }
        $chat_id = $chat->id; //id do chat entre o usuario clickado e o usuario logado
        $mensagens = Message::select('created_at','id_user','id','message','id_chat')->where('id_chat','=',$chat_id)->get(); //recuperando as mensagens referente a esse chat
        $total_mensagem = $mensagens->count();
        $mensagens['chat'] = $chat_id; //retorna o id do chat atual
        $mensagens['total_mensagem'] =  $total_mensagem;
        $mensagens = json_encode($mensagens);
        $response->getBody()->write($mensagens);
        return $response->withHeader('Content-Type','Application/json');
    }

    public function enviar(Request $request, Response $response,$args){
        //salva a mensagem com o id do usuario logado e o chat selecionado
        $chat = $args['chat'];
        $mensagem = $_POST['mensagem'];
        $retorno = Message::create(['message'=> $mensagem, 'id_chat' => $chat, 'id_user'=>$_SESSION['id']]);
        $retorno = json_encode($retorno);
        $response->getBody()->write($retorno);
        return $response->withHeader('Content-type','application/json');
    }

    public function receber(Request $request, Response $response,$args){
        $chat = $args['chat'];
        $id = $args['id'];
        $time = $args['time'];
        $time = str_replace('|','.',$time); //coloca a data novamente na formação correta

         
        $mensagens = Message::where('id_chat','=',$chat)->where('id_user',$id)->where('created_at','>',$time)->get(); //recupera apenas as mensagens atuais
        $mensagens = json_encode($mensagens);
        $response->getBody()->write($mensagens);
        return $response;
    }
}