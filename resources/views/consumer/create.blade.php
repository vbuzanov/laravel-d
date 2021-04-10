@extends('private.index')

@section('content_private')
    <h1>Додати споживача</h1>
    {!! Form::open(['url' => '/consumer', 'files' => true]) !!}
    
    @include('consumer._form')

    {!! Form::close() !!}
  
@endsection


@section('js')
{{-- <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script> --}}
{{-- <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script> --}}

    {{-- <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
  };
        // CKEDITOR.replace('description', options);

        $('#lfm').filemanager('image');

    </script> --}}
@endsection