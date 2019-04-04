@extends('layout.app')

@section('content')
    <h1>Messages</h1>
    @if (count($messages)>0)
        @foreach ($messages as $message)
            <ul class="list-group rounded">
                <li class="list-group-item"><span class="h4">Name: </span>{{$message->email}}</li>
                <li class="list-group-item"><span class="h4" >Email: </span>{{$message->name}}</li>
            <li class="list-group-item"><span class="h4">Message: </span >{{$message->message}}</li>
            </ul>
            <br/>
        @endforeach   
    @endif
@endsection

@section('sidebar')
@parent    
@endsection
