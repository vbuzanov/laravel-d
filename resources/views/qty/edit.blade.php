@extends('private.index')

@section('content_private')
    <h2>Внесення інформації про кількість спожитої електричної енергії: {{$consumer->name}}</h2>
 
    {!! Form::model($qty, ['url' => '/qty/'.$consumer->id, 'files' => true, 'method' => 'put']) !!}
    
    @include('qty._form')

    {!! Form::close() !!}
  
@endsection


