<div class="form-group">
    {!! Form::label('name', 'Найменування') !!}
    {!! Form::text('name', null, ['class'=>'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
    @error('name') 
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('code', 'Ідентифікаційний код:') !!}
    {!! Form::text('code', null, ['class'=>'form-control' . ($errors->has('code') ? ' is-invalid' : '')]) !!}
    @error('code') 
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>


<div class="form-group">
    {!! Form::label('phone', 'Телефон:') !!}
    {!! Form::number('phone', null, ['placeholder'=>'380', 'class'=>'form-control' . ($errors->has('code') ? ' is-invalid' : '')]) !!}
    @error('phone') 
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('address', 'Адреса:') !!}
    {!! Form::textarea('address', null, ['class'=>'form-control' . ($errors->has('address') ? ' is-invalid' : '')]) !!}
    @error('address') 
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>



<button class="btn btn-primary">Зберегти</button>