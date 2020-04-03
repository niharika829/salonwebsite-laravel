@extends('myproject.account')
@section('content')
<div style="font-size:20px;font-weight:20px;">
<p><b>your choices</b></p>
<p><b>{{$total}}</b></p>
<p><b>{{$count}}</b></p><div>
  <a class="button"href="{{url('/payment'.'/'.$name.'/'.$total.'/'.$count)}}" class="btn btn-md btn-danger">click to proceed</a>
@stop
