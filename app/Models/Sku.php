<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sku extends Model
{
    protected $table = "skus";
    protected $fillable = ['nome', 'quantidade', 'preco', 'produto_id'];

    public function produto(){
        return $this->belongsTo("App\Models\Produto");
    }
}
