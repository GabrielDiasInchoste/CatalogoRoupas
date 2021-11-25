<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendasSku extends Model
{
    protected $table = "vendas_skus";
    protected $fillable = [ 'venda_id', 'sku_id'];

	public function sku() {
		return $this->belongsTo("App\Models\Sku");
	}
}
