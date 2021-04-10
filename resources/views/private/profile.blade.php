@extends('private.index')

@section('content_private')

    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>    
    @endif

    <h5 class="ml-3">Вітаємо, {{auth()->user()->name}}</h5>


    {!! Form::model(auth()->user(), ['url' => '/private/profile', 'files' => true, 'method' => 'put']) !!}
    <div class="w-50 p-3 ml-3">

    <div class="form-group">
        {!! Form::label('name', "Ім'я:") !!}
        {!! Form::text('name', null, ['class'=>'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
        @error('name') 
            <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    
    
    <div class="form-group">
        {!! Form::label('email', 'E-Mail адреса:') !!}
        {!! Form::text('email', null, ['class'=>'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
        @error('email') 
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
 
    
    <div class="form-group">
        {!! Form::label('phone', 'Номер телефону:') !!}
        {!! Form::number('phone', null, ['placeholder'=>'380', 'class'=>'form-control']) !!}
    </div>

    

    <div class="form-group">
        {!! Form::label('avatar', 'Аватар:') !!}
        {!! Form::file('avatar', ['class'=>'form-control']) !!}
        @error('avatar') 
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

   
    
    <button class="btn btn-primary">Зберегти</button>
    </div>
    {!! Form::close() !!}




@endsection

@section('graph')
@endsection