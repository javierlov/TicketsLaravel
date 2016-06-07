@extends('layout')

@section('content')
	<div class="row">
        <h2 class="title" >Ticket</h2>		
		<p>
		Estado: 
		@if( $ticket->estado )			
                    <span class="label label-danger">{{ $ticket->estado->id }} . {{ $ticket->estado->detalle }}</span>		
		@else				
                    <span class="label label-info">Sin Estado</span>
		@endif		
		| <a href="{{ url('ticket') }}">Ver todos los tickets</a>
		</p>
		{{ $ticket->detalle }}	
	</div>
@endsection