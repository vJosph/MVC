<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jogos extends Model
{
    protected $fillable = ['id','name','preco'];
    protected $table = 'clientes';
}
