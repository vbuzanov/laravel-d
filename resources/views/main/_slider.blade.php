<div class="one-time">
    @foreach ($sliders as $slider)
        <div>
            {{-- <div> --}}
                <div class="slider d-flex justify-content-center">
                    <img class="text-center" src="{{ $slider->img }}" alt="{{ $slider->name }}">
                    {{-- <div class="content">
                        <div>
                            <h1>{{ $slider->name }}</h1>
                        </div>
                        <div>
                            {{ $slider->description }}
                        </div>
                        <div>
                            <a href="{{ $slider->button_url }}">{{ $slider->button_text }}</a>
                        </div>
                    </div> --}}
                </div>
         
            {{-- </div> --}}
        </div>
    @endforeach
</div>
@section('js')

<script>
    $(document).ready(function(){
        $('.one-time').slick({
            autoplay: true,
            arrows: false,
            dots: true,
            infinite: true,
            speed: 600,
            slidesToShow: 1,
            adaptiveHeight: true
            });
    });

</script>
@endsection

