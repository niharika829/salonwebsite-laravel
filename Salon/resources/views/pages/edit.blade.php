@extends('layouts.app')

@section('content')
    {!! Form::open(['action' => ['RecordsController@update',$record->id],'method'=>'POST']) !!}
    <div class="container">
    <h1>Edit Service</h1>
        <div class="form-group">
            {{Form::label('name','Name of the Service:')}}
            {{Form::text('name',$record->name,['class'=>'form-control','placeholder'=>'Enter the Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('description','Description of the Service:')}}
            {{Form::textarea('description',$record->description,['class'=>'form-control','placeholder'=>'Enter the Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price of the Service:')}}
            {{Form::number('price',$record->price,['class'=>'form-control','placeholder'=>'Enter the Price'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection