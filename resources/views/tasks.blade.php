@extends('app')
@section('content')

<div class="pannel-body">
	@include('errors')
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
	 @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
