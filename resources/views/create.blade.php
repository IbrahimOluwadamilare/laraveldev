@extends('app')

@section('title')
Create
@stop

@section('content')
    <h2>Schedule a Task</h2>
    <hr/>

    {{ Form::open(['url'=>'task']) }}
        
        <div class="form-group">        
            {!! Form::label('topic', 'Schedule Topic:')!!}
            {!! Form::text('schedule_topic', null, ['class' =>'form-control'])!!}
        </div>

        <div class="form-group">        
            {!! Form::label('date', 'Schedule Date:')!!}
            {!! Form::Date('schedule_date', null, ['class' =>'form-control'])!!}
        </div>        

        <div class="form-group">        
            {!!Form::submit('Add Schedule',['class' => 'btn btn-primary form-control'])!!}
        </div>

    {{ Form::close() }}

@stop

 