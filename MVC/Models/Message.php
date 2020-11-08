<?php

namespace Mvc\Models;
use Illuminate\Database\Eloquent\Model;
class Message extends Model{ //podemos extender o model para abilitar recursos dentro da nossa classe

    protected $fillable = [ //colunas  que podem ser preenchidas
        'message',
        'updated_at',
        'created_at',
        'id_user',
        'id_chat'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s',
    ];

}
