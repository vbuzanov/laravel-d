@extends('private.index')

@section('content_private')
<h4 class="text-center">Споживачі</h4>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger') }}
        </div>
    @endif
    <a href="/consumer/create" class="btn btn-primary mb-3">Додати споживача</a>
  
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Найменування</th>
                <th>Ідентифікаційний код</th>
                <th>Телефон</th>
                <th>Адреса</th>
                <th>Налаштування</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consumers as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->address}}</td>

                    <td>
                        <a href="/consumer/{{$item->id}}/edit" class="btn btn-success">Редагувати</a>
                        {!! Form::open(['url' => '/consumer/'.$item->id, 'method' => 'DELETE', 'class' => 'd-inline']) !!}
                            <button class="btn btn-danger">Видалити</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
