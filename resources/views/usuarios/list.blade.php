@extends('layout')

@section('content')
    <h2 class="title" >Listado de Usuarios</h2>		
    <p>
        <a href="usuario/create">Agregar un usuario</a>
    </p>
    
     <ul class="list-groups">
        @foreach($usuarios as $usuario)
        <li class="list-group-item">            
            {{  $usuario->id  }} .  {{  $usuario->name  }}            	
            <a href="{{ url('usuario/'.$usuario->id)}}" class="small" >Ver Usuario</a>
        </li>
        @endforeach
        </ul>


@endsection
