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

                            <input 
                            type = "checkbox"  
                            onClick = "this.form.submit()">{{ $item->title }}

                            <input type="hidden" name="id" value ="{{ $item->id }}">

                        {{ Form::close() }}


                    @endforeach
                    </ul>


                </div>



                <h5>
                    <p class="col-md-offset-1">Hint</p>

                    <ul>
                        
                    <li>Tick tasks you wish to delete</li> <p style="text-align: center;"> <a href="\"> Back Home </a> </p>

                    </ul>

                </h5>

            </div>
        </div>
    </div>
</div>
@endsection
