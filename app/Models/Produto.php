<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table ="produtos";
    protected $fillable =["nome","nacionalidade","dt_nascimento","inicio_atividades",];

}