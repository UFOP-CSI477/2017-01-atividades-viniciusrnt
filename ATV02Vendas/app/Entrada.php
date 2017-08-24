<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = ['produto_id', 'fornecedores_id', 'quantidade'];
    public function Produto() {
      return $this->belongsTo('App\Produto');
    }

    public function Fornecedores() {
      return $this->belongsTo('App\Fornecedor');
    }
}
