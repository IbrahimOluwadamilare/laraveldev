@extends('app')

@section('title')
Task
@stop

@section('content')
    <task>
        <a href=""><h2>{{$tasks -> schedule_topic}}</h2></a>
        <div class="body">{{$tasks-> schedule_date}}</div> 
    </task>
@stop