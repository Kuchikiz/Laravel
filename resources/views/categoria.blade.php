@extends('template.menu')

@section ('content')
<body>

  <section> 
        <form action="{{url('/categoria/inserir')}}" method="post">
            {{csrf_field()}}
            <div>
                <input type="text" name="categoria" placeholder="Nome da categoria" value="" />
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
                echo "<th> ID </th>";
                echo "<th> Categoria </th>";
                echo "&nbsp";
                echo "&nbsp";
                ?>
            @foreach($categoria as $c)
            <?php
                
                
                echo "<tr>";
                    echo "<td> {$c->idcategoria}  </td>";
                    echo "<td> {$c->categoria}  </td>";
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