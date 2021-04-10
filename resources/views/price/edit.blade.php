@extends('private.index')

@section('content_private')
    <h2>Робота з ціною: {{$consumer->name}}</h2>
 
    {!! Form::model($price, ['url' => '/price/'.$consumer->id, 'files' => true, 'method' => 'put']) !!}
    
    @include('price._form')

    {!! Form::close() !!}
  
@endsection


