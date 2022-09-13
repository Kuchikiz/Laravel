@extends('template.menu')
@section ('content')

<body>

  <section> 
        <form action="{{url('/pedido/inserir')}}" method="post">
            {{csrf_field()}}
            <div>
                <input type="text" name="pedido" placeholder="Seu item" value="" />
            </div>
            <div>
               <p> Data de entrega </p><input type="date" name="datapedi" placeholder="Data de entrega" value="" />
            </div>
            <div>
                <input type="submit" value="Salvar" />
            </div>
        </form>    
    </section>
        <?php
           
			?>		
            <table border="1" class = "tabela" cellspacing="3">
            <tbody>
                <?php
                echo "<th> ID pedido </th>";
                echo "<th> Data </th>";
                echo "<th> Cod Rastrear </th>";
                echo "&nbsp";
                echo "&nbsp";
                ?>
            @foreach($pedido as $p)
            <?php
                
                
                echo "<tr>";
                    echo "<td> {$p->idpedido}  </td>";
                    echo "<td> {$p->data}  </td>";
                    echo "<td> {$p->rastrearpedi}  </td>";
                    echo "<td> <a> Excluir </a> </td>";
                    echo "<td> <a> Alterar </a> </td>";

                echo "</tr>";
                
			?>
                
            @endforeach
                    </tbody>
                    </table>
    </section>

</body>





@endsection