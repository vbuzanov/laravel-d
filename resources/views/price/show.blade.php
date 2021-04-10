@extends('private.index')

@section('content_private')
<h2>Робота з ціною: {{$consumer->name}}</h2>
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
                <th colspan="13" class="text-center">Ціни за 2021 рік по місяцям, грн. за 1 кВт.год.</th>
            </tr>
            <tr>
                 <th>01</th>
                <th>02</th>
                <th>03</th>
                <th>04</th>
                <th>05</th>
                <th>06</th>
                <th>07</th>
                <th>08</th>
                <th>09</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>Внесення/зміна ціни</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prices as $item)
                <tr>
                    <td>{{$item->price_01_21 ? $item->price_01_21 : '–'}}</td>
                    <td>{{$item->price_02_21 ? $item->price_02_21 : '–'}}</td>
                    <td>{{$item->price_03_21 ? $item->price_03_21 : '–'}}</td>
                    <td>{{$item->price_04_21 ? $item->price_04_21 : '–'}}</td>
                    <td>{{$item->price_05_21 ? $item->price_05_21 : '–'}}</td>
                    <td>{{$item->price_06_21 ? $item->price_06_21 : '–'}}</td>
                    <td>{{$item->price_07_21 ? $item->price_07_21 : '–'}}</td>
                    <td>{{$item->price_08_21 ? $item->price_08_21 : '–'}}</td>
                    <td>{{$item->price_09_21 ? $item->price_09_21 : '–'}}</td>
                    <td>{{$item->price_10_21 ? $item->price_10_21 : '–'}}</td>
                    <td>{{$item->price_11_21 ? $item->price_11_21 : '–'}}</td>
                    <td>{{$item->price_12_21 ? $item->price_12_21 : '–'}}</td>

                    <td>
                        <a href="/price/{{$consumer->id}}/edit" class="btn btn-success">Редагувати</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection