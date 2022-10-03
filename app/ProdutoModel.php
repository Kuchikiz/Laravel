<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = "tbproduto";
    protected $fillable = 
    ['null', 'produto', 'valor'];
    public $timestamps = false;
}
