@foreach ($qty as $key => $item)
<div class="form-group">
    {!! Form::label($key, 'Кількість, ' . $key . ':') !!}
    {!! Form::number($key, null, ['step'=>'1', 'min'=>'0', 'class'=>'form-control']) !!}
</div>
@endforeach





<button class="btn btn-primary">Зберегти</button>