<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClienteModel;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Clientemodel::all();
        return view('cliente',compact('cliente'));
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
        $cliente = new clienteModel();
        $cliente -> idCliente = $request->idCliente;
        $cliente -> nome = $request->nome;
        $cliente -> dataNasc = $request->date;
        $cliente -> genero = $request->genero;
        $cliente -> estadoCivil = $request->estadoCivil;
        $cliente -> endereco = $request->endereco;
        $cliente -> numero = $request->numero;
        $cliente -> complemento = $request->complemento;
        $cliente -> cep = $request->cep;
        $cliente -> bairro = $request->bairro;
        $cliente -> cidade = $request->cidade;
        $cliente -> estado = $request->estado;
        $cliente -> cpf = $request->cpf;
        $cliente -> rg = $request->rg;
        $cliente -> fone = $request->fone;
        $cliente -> celular = $request->celular;
        $cliente -> email = $request->email;

        $cliente->save();
        return redirect("/cliente");

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
