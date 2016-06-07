@extends('layout')

@section('content')
	<div class="row">
        <h2 class="title" >Usuario</h2>				
	Nombre; {{ $usuarios->name }}	
        | Sexo: {{ $usuarios->sexo }}	
        | Email: {{ $usuarios->email }}	
        | <a href="{{ url('usuario') }}">Ver todos los usuarios</a>
	</p>
	</div>
@endsection