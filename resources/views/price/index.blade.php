@extends('private.index')

@section('content_private')
<h4 class="text-center">Робота з ціною</h4>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @elseif(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
    @endif
   
    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Найменування</th>
                <th>Ідентифікаційний код</th>
                <th>Адреса</th>
                <th>Внесення/зміна ціни</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consumers as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="/price/{{$item->id}}">{{$item->name}}</a></td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->address}}</td>

                    <td>
                        <a href="/price/{{$item->id}}/edit" class="btn btn-success">Редагувати</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
