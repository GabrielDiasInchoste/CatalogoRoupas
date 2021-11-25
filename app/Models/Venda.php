<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = "vendas";
    protected $fillable = ['nome','cliente_id'];

    public function cliente(){
        return $this->belongsTo("App\Models\Cliente");
    }

    public function skus() {
		return $this->hasMany("App\Models\VendasSku");
	}
}
