@extends('private.index')

@section('content_private')
    <h1>Додати новину</h1>
    {!! Form::open(['url' => '/private/news', 'files' => true]) !!}
    
    @include('news._form')

    {!! Form::close() !!}
  
@endsection

