<div class="one-time">
    @foreach ($sliders as $slider)
        <div>
 
                <div class="slider d-flex justify-content-center">
                    <img class="text-center" src="{{ $slider->img }}" alt="{{ $slider->name }}">

                            <h2>{{ $slider->name }}</h2>
     
                        <p>
                            {!! $slider->description !!}
                        </p>

                </div>
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
            adaptiveHeight: true,
            pauseOnHover: false
            });
    });

</script>
@endsection

