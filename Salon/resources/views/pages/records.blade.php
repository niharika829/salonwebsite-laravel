@extends('layouts.app')

@section('content')
    <h1 class="text-center">Services</h1>
    @if(!Auth::guest())
        @if(Auth::user()->name == 'admin')
            <a href="/record/create" class="btn btn-success text-center">Create Service</a>
        @endif
    @endif
    @if(count($records)>0)
        @foreach($records as $record)
            <div class="container">
                <div class="card bg-light mt-5">
                    <div class="card-body">
                        <h3><a href="/record/{{$record->id}}">{{$record->name}}</a></h3>
                        <small>Added on {{$record->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="text-center">{{$records->links()}}</div>
    @else
        <p>No Record found</p>
    @endif
@endsection