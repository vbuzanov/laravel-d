@extends('private.index')

@section('content_private')
    <h4 class="text-center">Інформація по споживачу: {{$consumer->name}}</h4>


    <table class="table" id="dataTable">
        <thead>
            <tr>
                <th colspan="14" class="text-center">Інформація за 2021 рік по місяцям</th>
            </tr>
            <tr>
                <th>Показник</th>
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
                <th>Всього</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>Ціна, грн.</td>
                    @foreach ($price as $item)
                        <td>{{$item ? $item : '–'}}</td>
                    @endforeach
                    <td>X</td>
                </tr>
                <tr>
                    <td>Кількість, кВт.год.</td>
                    @foreach ($qty as $item)
                        <td>{{$item ? $item : '–'}}</td>
                    @endforeach
                    <td>{{$totalQty}}</td>
                </tr>
                <tr>
                    <td>Сума, грн.</td>
                    @foreach ($totalSumM as $item)
                        <td>{{$item ? $item : '–'}}</td>
                    @endforeach
                    <td>{{$totalSumY}}</td>
                </tr>

        </tbody>
    </table>





@endsection

@section('graph')
@endsection