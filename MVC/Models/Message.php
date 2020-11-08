<?php

namespace Mvc\Models;
use Illuminate\Database\Eloquent\Model;
class Message extends Model{ //podemos extender o model para abilitar recursos dentro da nossa classe

    protected $fillable = [ //colunas  que podem ser preenchidas
        'message',
        'updated_at',
        'created_at'
    ];
}
