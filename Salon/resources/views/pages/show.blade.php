@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <h1>{{$record->name}}</h1>
        </div>
        <div class="card-body">
            <h3 class="card-title">Specially for YOU</h3>
            <p class="card-text">{{$record->description}}</p>
            <a href="/payment" class="btn btn-primary">Proceed To Book</a>
        </div>
        <div class="card-footer text-muted">
            <h2>${{$record->price}}</h2>
        </div>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->name == 'admin')
                <a href="/record/{{$record->id}}/edit" class="btn btn-success">Edit</a>
                {!!Form::open(['action'=>['RecordsController@destroy',$record->id],'method'=>'POST','class'=>'float-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    </div>
</div>
@endsection