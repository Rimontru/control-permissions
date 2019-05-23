<div class="form-group">
	{{ Form::label('name', 'Nombre del video') }}
	{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción del video') }}
	{{ Form::text('description', null, ['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class'=>'btn btn-outline-primary btn-sm']) }}
</div>