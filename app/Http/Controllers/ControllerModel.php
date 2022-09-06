<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaModel;
use App\PedidoModel;
use App\ClienteModel;
use App\ProdutoModel;
class ControllerModel extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = CategoriaModel::all();
        $pedidos = PedidoModel::all();
        $clientes = ClienteModel::all();
        $produtos = ProdutoModel::all();

        echo "</br> Produtos: ";
        foreach($produtos as $p) {
            echo "<h1> IdProduto: ". $p->idproduto."</br></h1>";
            echo "<h1> IdCategoria: ".$c->idcategoria."</br></h1>";
            echo "<h1> Produto: ".$p->produto."</br></h1>";
            echo "<h1> Valor: ".$p->valor."</br></h1>";
        }
        echo "</br> Categorias: ";
        foreach($categoria as $c) {
            echo "<h1> IdCategoria: ".$c->idcategoria."</br></h1>";
            echo "<h1> Categoria: ".$c->categoria."</br></h1>";
        }
        echo "</br> Pedidos: ";
        foreach($pedidos as $pe) {
            echo "<h1> IdPedido: ".$pe->idpedido ."</br></h1>";
            echo "<h1> Data Pedido: ".$pe->data ."</br></h1>";
            echo "<h1> Codigo Rastreamento: ".$pe->rastrear ."</br></h1>";
        }
        echo "</br> Clientes: ";
        foreach($clientes as $cl) {
            echo "<h1> IdCategoria: ".$cl->idCliente ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->nome ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->dataNasc ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->genero ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->EstadoCivil ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->endereco ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->numero ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->complemento ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->cep ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->bairro ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->cidade ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->estado ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->cpf ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->rg ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->fone ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->celular ."</br></h1>";
            echo "<h1> IdCategoria: ".$cl->email ."</br></h1>";

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
