@extends('template.menu')
@section ('content')

<body>

  <section> 
    <center>
        <form action="{{url('/pedido/inserir')}}" method="post">
            {{csrf_field()}}
          

  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Data de Entrega</label>
    <input type="date" class="form-control" name="datapedi" value="" id="exampleInputCategoria1"  placeholder="Data de Entrega">
  </div>

  <div class="form-group col-5">
    <label for="exampleInputCategoria1">Código de Rastrear</label>
    <input type="text" class="form-control" name="rastrearpedi" value="" id="exampleInputCategoria1"  placeholder="Código de Rastreamento">
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</center>

    </section>
<center>
        <?php
           
			?>		
            <div class="table-responsive">
            <table class="table table-hover w-25 p-3">
            <thead class="thead-light">
            
                <tr>
                <?php
                echo "<th scope='col'> ID pedido </th>";
                echo "<th scope='col'> Data </th>";
                echo "<th scope='col'> Cod Rastrear </th>";
                echo "&nbsp";
                echo "&nbsp";
                ?>
                </tr>
                <tbody> 
            @foreach($pedido as $p)
            <?php
                
                
                echo "<tr>";
                    echo "<td> {$p->idpedido}  </td>";
                    echo "<td> {$p->data}  </td>";
                    echo "<td> {$p->rastrear}  </td>";
                    echo "<td> <a href='/pedido/{$p->idpedido}'> Excluir </a> </td>";
                    echo "<td> <a> Alterar </a> </td>";

                echo "</tr>";
                
			?>
                
            @endforeach
                   <tbody>
                    </table>
    </section>
    </center>
</body>





@endsection