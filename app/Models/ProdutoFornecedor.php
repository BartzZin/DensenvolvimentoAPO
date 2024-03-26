<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoFornecedor extends Model
{
    protected $fillable = ['idfornecedors', 'idproduto'];
}