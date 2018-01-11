@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    Your Tasks

                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Completed Tasks</h4>

                                <ul>

                                @foreach($items as $item)

                                @if($item->completed == 1)

                                    <li> {{ $item->title }} </li>

                                @endif

                                @endforeach

                                </ul>

                        </div>

                        <div class="col-md-6">

                            <h4>Incomplete Tasks</h4>

                                <ul>

                                @foreach($items as $item)

                                @if($item->completed == 0)

                                    <li> {{ $item->title }} </li>

                                @endif

                                @endforeach

                                </ul>

                        </div>

                    </div>

                            <hr>
                            <div class="col-md-3 col-md-offset-1">
                                <a href="view"> View Tasks</a> 
                            </div>

                            <div class="col-md-3 col-md-offset-1">
                            <a href="create"> Create Task</a>
                            </div>

                            <div class="col-md-3 col-md-offset-1">
                            <a href="delete"> Delete Task(s)</a>
                            </div>

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
