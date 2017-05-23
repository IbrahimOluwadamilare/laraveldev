@extends('app')

@section('title')
    Task
@stop 

@section('content')

<h2>Todo's</h2> <hr>

@foreach ($tasks as $task)

    <task>
        <a href="{{ action('TaskController@task' , [$task -> id]) }}"><h2>{{$task -> schedule_topic}}</h2></a>
        <div class="body">{{$task -> schedule_date}}</div> 
    </task>

@endforeach


@stop