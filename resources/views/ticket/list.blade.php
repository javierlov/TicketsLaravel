@extends('layout')

@section('content')
    <h2 class="title" >Listado de Tickets</h2>		
    <p>
        <a href="ticket/crear">Agregar un ticket</a>
    </p>
    
    <ul class="list-groups">
        @foreach($tickets as $ticket)
        <li class="list-group-item">
            @if( $ticket->estado )                
                <span class="label label-danger">{{ $ticket->estado->id }} . {{ $ticket->estado->detalle }}</span>

            @else				
                <span class="label label-info">Sin Estado</span>
            @endif			

            {{  $ticket->id  }} . 
            @if(strlen($ticket->detalle) >  100 )				
                    {{ substr($ticket->detalle, 0, 100) }}...
            @else				
                    {{  $ticket->detalle  }}
            @endif			
            <a href="{{ url('ticket/'.$ticket->id)}}" class="small" >Ver Ticket</a>
        </li>
        @endforeach
        </ul>

    {!! $tickets->render() !!}	

@endsection
