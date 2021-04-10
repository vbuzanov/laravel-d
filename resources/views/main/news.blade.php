@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="ml-3 text-center">Новини</h2>

        @include('messages.errors')
        @foreach ($news as $new1)

            <article class="border border-bottom-0 border-primary mb-5 shadow-sm p-3">
                <h5 class="font-weight-bold">{{$new1->title}}</h5>
                <p>{!!$new1->short_content!!}</p>
                <a href="/newsnext/{{$new1->slug}}">Читати далі...</a>
            </article>
 
        @endforeach
        {{$news->links()}}
    </div>

@endsection