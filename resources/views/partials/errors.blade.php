		@if(! $errors->isEmpty() )
		<div class="alert alert-danger" >
			<p><strong>Oopss!</strong> Por favor solucione los errores</p>
			<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
		@endif