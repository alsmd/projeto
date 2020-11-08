<?php

namespace Mvc\Models;
use Illuminate\Database\Eloquent\Model;
class Chat extends Model{ //podemos extender o model para abilitar recursos dentro da nossa classe

    protected $fillable = [ //colunas  que podem ser preenchidas
        'id_user1',
        'id_user2',
        'updated_at',
        'created_at'
    ];

    static public function criar_chat($user1,$user2){
        return parent::create(['id_user1'=>$user1,'id_user2'=>$user2]);
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
}
