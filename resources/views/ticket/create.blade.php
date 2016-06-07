@extends('layouts.app')

@section('content')
    <div class="row">
    <h2 class="title" >Crear Ticket</h2>

        @include('partials\errors')

        <form method="POST" action="crear" class="form">			
            {!! csrf_field() !!}
            <!--
            <input type="hidden" name="ken" value="{{ csrf_token() }}"></input>
            -->
            <textarea name='ticket' class="form-control" rows=5 placeholder="Escribe el detalle del ticket">{{ old('ticket') }}</textarea>			
            <p></p>			
            {!! Form::select('estado', $estados, 1, array('class' => 'form-control' ) );  !!}
            
            <p></p>			
            <button type="submit" class="btn btn-primary">Crear ticket</button>
            <button type="reset" class="btn btn-primary">Limpiar</button>
        </form>
    </div>
@endsection