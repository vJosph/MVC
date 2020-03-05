<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    protected $fillable = ['id','name','tel','email'];
    protected $table = 'clientes';
}
