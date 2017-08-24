<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome', 'nomefantasia', 'telefone'];
    protected $table = 'fornecedores';
}
