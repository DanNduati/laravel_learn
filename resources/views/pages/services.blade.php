@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <!--check for services-->
    @if (count($services)>0)
    <ul class = "list-group">
        @foreach ($services as $s)
            <li class ="list-group-item">{{$s}}</li>
        @endforeach        
    @endif
    </ul>
@endsection