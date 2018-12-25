@extends('app')
@section('content')

<div class="pannel-body">
	{!! Form::open() !!}
		<div class="form-group">
			{!!Form::label('task', 'Task', ['class' => 'col-sm-3 control-label'])!!}
		<div class="col-sm-6">
			{!!Form::text('text', ['class' => 'form-control'])!!}
		</div>
		</div>

		<div class="col-sm-6">
			<div class="col-sm-offset-3 col-sm-6">
			{!!Form::submit('submit', 'Add Task', ['class' => 'btn btn-default'])!!}
			</div>
		</div>
	{!! Form::close() !!}
</div>
@endsection
