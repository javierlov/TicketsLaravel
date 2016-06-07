@extends('layout')

@section('content')
    <div class="row">
    <h2 class="title" >Crear Usuario</h2>

        @include('partials\errors')

        <form method="POST" action="/usuario" class="form" >			
            {!! csrf_field() !!}
            <input type="text" name='name' class="form-control"  placeholder="nombre del usuario" value="{{ old('name') }}" />			
            <p></p>			
            <input type="password" name='password' class="form-control" rows=5 placeholder="passsword" value="{{ old('password') }}" />			
            <p></p>			
            <input type="text" name='email' class="form-control"  placeholder="email" value="{{ old('email') }}" />			
            <p></p>			            
            {!! Form::select('sexo', array('M'=>'Masculino', 'F'=>'Femenino'), 1, array('class' => 'form-control' ) );  !!}
                        
            <p></p>			
            <button type="submit" class="btn btn-primary">Crear usuario</button>
            <button type="reset" class="btn btn-primary">Limpiar</button>
        </form>
    </div>
@endsection