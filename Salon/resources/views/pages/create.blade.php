@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => 'RecordsController@store','method'=>'POST']) !!}
    <div class="container">
    <h1>Create Service</h1>
        <div class="form-group">
            {{Form::label('name','Name of the Service:')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter the Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description','Description of the Service:')}}
            {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Enter the Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price of the Service:')}}
            {{Form::number('price','',['class'=>'form-control','placeholder'=>'Enter the Price'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection