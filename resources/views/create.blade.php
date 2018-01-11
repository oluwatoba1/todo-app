@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">

	<h4>Create Task</h4>

	{{ Form::open() }}

	{{ csrf_field() }}

	<textarea id="title" type="text" name="title" class="form-control" style="width: 50%;"></textarea> <br>

	<input type="submit">

	{{ Form::close() }}

				</div>

            </div>
        </div>
    </div>
</div>

@endsection