@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="ml-3 text-center">Новини</h2>
        <hr>
        <article class="newsnext">
            <h5 class="font-weight-bold text-center">{{$newsnext->title}}</h5>
            <p>{{$newsnext->created_at->format('d.m.Y')}}, <i> автор: </i> <span class="text-uppercase">{{$newsnext->user->name}}</span> </p>
            <p>{!!$newsnext->content!!}</p>
        </article>




    </div>


@endsection