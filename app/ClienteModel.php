<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $table = "tbcliente";
    protected $fillable =
    ['null','nome','dataNasc','genero','estadoCivil','endereco','numero','complemento','cep','bairro','cidade','estado','cpf','rg','fone','celular','email'];
    public $timestamps = false;
}
