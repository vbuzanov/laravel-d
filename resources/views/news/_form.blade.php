<div class="form-group">
    {!! Form::label('title', 'Заголовок:') !!}
    {!! Form::text('title', null, ['class'=>'form-control' . ($errors->has('title') ? ' is-invalid' : '')]) !!}
    @error('title') 
        <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Слаг:') !!}
    {!! Form::text('slug', null, ['class'=>'form-control' . ($errors->has('slug') ? ' is-invalid' : '')]) !!}
    @error('slug') 
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('short_content', 'Короткий зміст:') !!}
    {!! Form::textarea('short_content', null, ['class'=>'form-control' . ($errors->has('short_content') ? ' is-invalid' : '')]) !!}
    @error('short_content') 
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('content', 'Зміст:') !!}
    {!! Form::textarea('content', null, ['class'=>'form-control' . ($errors->has('content') ? ' is-invalid' : '')]) !!}
    @error('content') 
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
</div>


{!! Form::label('img', 'Зображення:') !!}
<div class="input-group">
    <span class="input-group-btn">
      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
        <i class="fa fa-picture-o"></i> Choose
      </a>
    </span>
    <input id="thumbnail" class="form-control @error('img') is-invalid @enderror" type="text" name="img"  value="@isset($news) {{$news->img}} @endisset">
    @error('img') 
    <div class="invalid-feedback">{{$message}}
    @enderror
</div>

<div id="holder" style="margin-top:15px;max-height:100px;">
    @isset($news)
        <img src="{{$news->img}}" alt="" style="max-height:100px;">
    @endisset
</div>


<button class="btn btn-primary">Зберегти</button>