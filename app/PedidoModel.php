<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoModel extends Model
{
    protected $table = "tbpedido";
    protected $fillable = 
    ['null', 'data', 'rastrear'];
    public $timestamps = false;
}
