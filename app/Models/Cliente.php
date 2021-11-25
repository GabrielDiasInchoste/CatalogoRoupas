<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $fillable = ['nome', 'telefone', 'nacionalidade_id'];

    public function nacionalidade(){
        return $this->belongsTo("App\Models\Nacionalidade");
    }
}
