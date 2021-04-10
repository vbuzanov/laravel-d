@foreach ($price as $key => $item)
<div class="form-group">
    {!! Form::label($key, 'Ціна, ' . $key . ':') !!}
    {!! Form::number($key, null, ['step'=>'0.01', 'min'=>'0', 'class'=>'form-control']) !!}
</div>
@endforeach






<button class="btn btn-primary">Зберегти</button>