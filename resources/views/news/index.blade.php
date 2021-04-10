@extends('private.index')

@section('content_private')
    <h4 class="text-center">Робота з новинами</h4>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
    @endif
    <a href="/private/news/create" class="btn btn-primary mb-3">Додати новину</a>

    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Заголовок</th>
                <th>Короткий зміст</th>
                <th>Зображення</th>
                <th>Автор</th>
                <th>Дата створення</th>
                <th>Налаштування</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->short_content}}</td>
                    <td><img src="{{asset($item->img)}}" alt="" style="width: 70px"></td>
                    <td>{{$item->user_id ? $item->user->name : ''}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                        <a href="/private/news/{{$item->id}}/edit" class="btn btn-success">Редагувати</a>
                        {!! Form::open(['url' => '/private/news/'.$item->id, 'method' => 'DELETE', 'class' => 'd-inline']) !!}
                            <button class="btn btn-danger">Видалити</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>



@endsection