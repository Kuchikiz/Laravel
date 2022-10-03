@extends('template.menu')
@section ('content')

<body>

  <section> 
    <center> 
<form action="{{url('/cliente/inserir')}}" method="post">
{{csrf_field()}}
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Nome do Cliente</label>
    <input type="text" class="form-control" name="nome" value="" id="exampleInputCliente"  placeholder="">
  </div>

  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Data de Nascimento</label>
    <input type="date" class="form-control" name="date" value="" id="exampleInputCliente"  placeholder="">
  </div>

  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Gênero</label>
    <input type="text" class="form-control" name="genero" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Estado Civil</label>
    <input type="text" class="form-control" name="estadoCivil" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Endereço</label>
    <input type="text" class="form-control" name="endereco" value="" id="exampleInputCliente"  placeholder="">
  </div>

  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Número</label>
    <input type="text" class="form-control" name="numero" value="" id="exampleInputCliente"  placeholder="">
  </div>

  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Complemento</label>
    <input type="text" class="form-control" name="complemento" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Cep</label>
    <input type="text" class="form-control" name="cep" value="" id="exampleInputCliente"  placeholder="">
  </div>

  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Bairro</label>
    <input type="text" class="form-control" name="bairro" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Cidade</label>
    <input type="text" class="form-control" name="cidade" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Estado</label>
    <input type="text" class="form-control" name="estado" value="" id="exampleInputCliente"  placeholder="">
  </div>

  <div class="form-group col-5">
    <label for="exampleInputCategoria1">CPF</label>
    <input type="text" class="form-control" name="cpf" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">RG</label>
    <input type="text" class="form-control" name="rg" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Telefone</label>
    <input type="text" class="form-control" name="fone" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Celular</label>
    <input type="text" class="form-control" name="celular" value="" id="exampleInputCliente"  placeholder="">
  </div>
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">E-mail</label>
    <input type="email" class="form-control" name="email" value="" id="exampleInputCliente"  placeholder="">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    <section>
<center>
        <?php
           
			?>		
            <div class="table-responsive">
            <table class="table table-hover w-25 p-3">
            <thead class="thead-light">
            <tr>
                <?php
                echo "<th scope='col'> ID do Cliente </th>";
                echo "<th scope='col'> Nome </th>";
                echo "<th scope='col'> Data de Nascimento</th>";
                echo "<th scope='col'> Gênero </th>";
                echo "<th scope='col'> Estado Civil </th>";
                echo "<th scope='col'> Endereço </th>";
                echo "<th scope='col'> Número </th>";
                echo "<th scope='col'> Complemento </th>";
                echo "<th scope='col'> CEP </th>";
                echo "<th scope='col'> Bairro </th>";
                echo "<th scope='col'> Cidade </th>";
                echo "<th scope='col'> Estado </th>";
                echo "<th scope='col'> CPF </th>";
                echo "<th scope='col'> RG </th>";
                echo "<th scope='col'> Telefone </th>";
                echo "<th scope='col'> Celular </th>";
                echo "<th scope='col'> E-mail </th>";
                echo "&nbsp";
                echo "&nbsp";
                ?>
                </tr>
                <tbody>
            @foreach($cliente as $cl)
            <?php
                
                
                echo "<tr>";
                    echo "<td> {$cl->idCliente}  </td>";
                    echo "<td> {$cl->nome}  </td>";
                    echo "<td> {$cl->dataNasc}  </td>";
                    echo "<td> {$cl->genero}  </td>";
                    echo "<td> {$cl->estadoCivil}  </td>";
                    echo "<td> {$cl->endereco}  </td>";
                    echo "<td> {$cl->numero}  </td>";
                    echo "<td> {$cl->complemento}  </td>";
                    echo "<td> {$cl->cep}  </td>";
                    echo "<td> {$cl->bairro}  </td>";
                    echo "<td> {$cl->cidade}  </td>";
                    echo "<td> {$cl->estado}  </td>";
                    echo "<td> {$cl->cpf}  </td>";
                    echo "<td> {$cl->rg}  </td>";
                    echo "<td> {$cl->fone}  </td>";
                    echo "<td> {$cl->celular}  </td>";
                    echo "<td> {$cl->email}  </td>";     
                    echo "<td> <a> Excluir </a> </td>";
                    echo "<td> <a> Alterar </a> </td>";

                echo "</tr>";
                
			?>
                
            @endforeach
                    </tbody>
                    </table>
    </section>
    </center>

</body>






@endsection