@extends('template.menu')
@section ('content')

<body>

  <section> 
    <center> 
<form action="{{url('/categoria/inserir')}}" method="post">
{{csrf_field()}}
  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Cliente</label>
    <input type="text" class="form-control" name="Cliente" value="" id="exampleInputCliente"  placeholder="">
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
      <th scope="col">ID Categoria</th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categoria as $c)
            <?php
                
                
                echo "<tr>";
                    echo "<td> {$c->idcategoria}  </td>";
                    echo "<td> {$c->categoria}  </td>";
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