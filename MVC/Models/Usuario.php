<?php

namespace Mvc\Models;
use Illuminate\Database\Eloquent\Model;
class Usuario extends Model{ //podemos extender o model para abilitar recursos dentro da nossa classe

    protected $fillable = [ //colunas  que podem ser preenchidas
        'nome',
        'email',
        'senha',
        'updated_at',
        'created_at',
        'id_user1',
        'id_user2',
        'status'
    ];
}
