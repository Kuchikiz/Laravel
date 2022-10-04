@extends('template.menu')
@section ('content')



<body>

  <section> 
    <center> 
<form action="{{url('/produto/inserir')}}" method="post">
{{csrf_field()}}
  <div class="form-group col-5">
    <label for="exampleInputProduto"></label>
    <input type="text" class="form-control" name="produto" value="" id="exampleInputProduto"  placeholder="Nome do Produto"> <br>
     <input type="text" class="form-control" name="valor" value="" id="exampleInputProduto"  placeholder="Valor do Produto">
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </section>
</center>

<div class="table-responsive">
    <center>
<table class="table table-hover w-25 p-3">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID Produto</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>
      <th scope="col"> &nbsp<th>
      <th scope="col"> &nbsp<th>
    </tr>
  </thead>
  <tbody>
  @foreach($produto as $p)
            <?php
                
                
                echo "<tr>";
                    echo "<td> {$p->idproduto}  </td>";
                    echo "<td> {$p->produto}  </td>";
                    echo "<td> {$p->valor}  </td>";
                    echo "<td> <a href='/produto/{$p->idproduto}'> Excluir </a> </td>";
                    echo "<td> <a> Alterar </a> </td>";

                echo "</tr>";
                
			?>
                
            @endforeach
  </tbody>
</table>
</center>
</div>
    </section>

</body>





@endsection