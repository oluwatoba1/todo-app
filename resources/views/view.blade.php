@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    Your Tasks

                    <hr>

                    <ul>
                    @foreach($items as $item)


                        {{ Form::open() }}

                        {{ csrf_field() }}

                        <input 
                        type = "checkbox"  
                        onClick = "this.form.submit()"
                        {{ $item->completed ? 'checked' : '' }}>{{ $item->title }}

                        <input type="hidden" name="id" value ="{{ $item->id }}">

                        {{ Form::close() }}


                    @endforeach
                    </ul>


                            <h5>
                                <p class="col-md-offset-1">Hint:</p>

                            <ul>

                            <li>Checked Boxes indicates tasks has been completed</li> <br>
                            <li>Tick/Untick boxes to indicate completion/incompletion</li> <br>

                            </h5>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
