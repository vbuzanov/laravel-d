@extends('private.index')

@section('content_private')
<h2>Внесення інформації про кількість спожитої електричної енергії: {{$consumer->name}}</h2>
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
                <th colspan="13" class="text-center">Кількість спожитої електричної енергії за 2021 рік по місяцям, кВт.год.</th>
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
                <th>Внесення/зміна кількості</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($qtys as $item)
                <tr>
                    <td>{{$item->qty_01_21 ? $item->qty_01_21 : '–'}}</td>
                    <td>{{$item->qty_02_21 ? $item->qty_02_21 : '–'}}</td>
                    <td>{{$item->qty_03_21 ? $item->qty_03_21 : '–'}}</td>
                    <td>{{$item->qty_04_21 ? $item->qty_04_21 : '–'}}</td>
                    <td>{{$item->qty_05_21 ? $item->qty_05_21 : '–'}}</td>
                    <td>{{$item->qty_06_21 ? $item->qty_06_21 : '–'}}</td>
                    <td>{{$item->qty_07_21 ? $item->qty_07_21 : '–'}}</td>
                    <td>{{$item->qty_08_21 ? $item->qty_08_21 : '–'}}</td>
                    <td>{{$item->qty_09_21 ? $item->qty_09_21 : '–'}}</td>
                    <td>{{$item->qty_10_21 ? $item->qty_10_21 : '–'}}</td>
                    <td>{{$item->qty_11_21 ? $item->qty_11_21 : '–'}}</td>
                    <td>{{$item->qty_12_21 ? $item->qty_12_21 : '–'}}</td>

                    <td>
                        <a href="/qty/{{$consumer->id}}/edit" class="btn btn-success">Редагувати</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection