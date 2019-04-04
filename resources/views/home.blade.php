@extends('layout.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro rem modi quo tempora quisquam repellendus dolor corrupti obcaecati minima sit!</p>
    @endsection

@section('sidebar')
@parent    
<p>This is appended</p>
@endsection
