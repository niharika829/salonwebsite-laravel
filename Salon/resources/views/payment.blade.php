@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Make Payment</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {!! Form::open() !!}
                        <h1>Enter Details</h1>
                        <div class="form-group">
                            {{Form::label('name','Name on the Card:')}}
                            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter the Name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('cardnum','Number of the Card:')}}
                            {{Form::number('cardnum','',['class'=>'form-control','placeholder'=>'Number of the Card'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('cvv','CVV of the Card:')}}
                            {{Form::number('cvv','',['class'=>'form-control','placeholder'=>'CVV of the Card'])}}
                        </div>
                    <a class="btn btn-primary" role="button" href="/">Pay</a>
                </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
