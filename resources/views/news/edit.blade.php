@extends('private.index')

@section('content_private')
    <h1>Редагувати новину</h1>
    {!! Form::model($news, ['url' => '/private/news/'.$news->id, 'files' => true, 'method' => 'put']) !!}
    
    @include('news._form')

    {!! Form::close() !!}
  
@endsection

