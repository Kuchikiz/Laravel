@extends('template.menu')

@section ('content')
<body>
@foreach($categoria as $c)
    <h1> {{$c->idcategoria}} </h1>
    
    
   
@endforeach

</body>

@endsection