@extends('layout.app')

@section('content')
<h1>Contact</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, nisi.</p>
{!!Form::open(['url'=>'contact/submit'])!!}
<div class="form-group">
    {{Form::label('name','Name')}}
    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Name'])}}
</div>
<div class="form-group">
    {{Form::label('email','Email Adress')}}
    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Enter Email'])}}
</div>
<div class="form-group">
    {{Form::label('message','Message')}}
    {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Write message...'])}}
</div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection