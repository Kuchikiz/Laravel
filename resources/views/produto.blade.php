@extends('template.menu')
@section ('content')

<body>
<section> 
        <form action="{{url('/produto/inserir')}}" method="post">
            {{csrf_field()}}
            <br><br>
            <div>
                <input type="text" name="produto" placeholder="Produto a ser cadastrado" value="" />
            </div>
            <div>
                <input type="text" name="valor" placeholder="Valor do produto" value="" />
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
                echo "<th> ID produto </th>";
                echo "<th> Nome </th>";
                echo "<th> Valor </th>";
                echo "&nbsp";
                echo "&nbsp";
                ?>
            @foreach($produto as $p)
            <?php
                
                
                echo "<tr>";
                    echo "<td> {$p->idproduto}  </td>";
                    echo "<td> {$p->produto}  </td>";
                    echo "<td> {$p->valor}  </td>";
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