@extends('private.index')

@section('content_private')
    <h1>Редагування споживача</h1>
    {!! Form::model($consumer, ['url' => '/consumer/'.$consumer->id, 'files' => true, 'method' => 'put']) !!}
    
    @include('consumer._form')

    {!! Form::close() !!}
  
@endsection

