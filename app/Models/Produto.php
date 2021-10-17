<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = "produtos";
    protected $fillable = ['nome', 'categoria_id'];

    public function skus()
    {
        return $this->hasMany("App\Models\Sku");
    }

    public function categoria()
    {
        return $this->belongsTo("App\Models\Categoria");
    }
}
