@extends('layouts.app')

@section('content')


<div id="wrapper">
    @role('admin')
        @include('private._sidebar')
    @endrole
    @role('manager')
        @include('private._sidebar')
    @endrole
    @role('user')
        @include('private._sidebar_user')
    @endrole

    
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h4>Особистий кабінет</h4>
            <hr/>
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"><i class="fas fa-bars"></i></span></a>
            @yield('content_private')
            @role('user')
                @section('graph')
                    @include('private._graph')
                @show
            @endrole
            @role('admin')
                {!! Request::is('private') ? '<h5>Вітаємо! Тут ви можете додати або змінити дані споживачів, а також власні дані</h5>' : '' !!}
            @endrole
            @role('manager')
                {!! Request::is('private') ? '<h5>Вітаємо! Тут ви можете додати або змінити дані споживачів, а також власні дані</h5>' : '' !!}
            @endrole

          </div>
        </div>
      </div>
    </div>
  </div>






@endsection

@section('js')


    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
            CKEDITOR.replace('content', options);
            CKEDITOR.replace('short_content', options);

            $('#lfm').filemanager('image');

    </script>

 
     @role('user')
    <script>
        var ctx = document.getElementById('myLineChart').getContext('2d');
        // const labels = Utils.months({count: 12});
        const data = {
        labels: ['Січень','Лютий', 'Березень','Квітень', 'Травень','Червень', 'Липень','Серпень', 'Вересень','Жовтень', 'Листопад','Грудень'],
        datasets: [{
            label: 'Електрична енергія (кВт.год.)',
            data: [
                        <?=$consumer->quantity->qty_01_21?>,
                        <?=$consumer->quantity->qty_02_21?>,
                        <?=$consumer->quantity->qty_03_21?>,
                        <?=$consumer->quantity->qty_04_21?>,
                        <?=$consumer->quantity->qty_05_21?>,
                        <?=$consumer->quantity->qty_06_21?>,
                        <?=$consumer->quantity->qty_07_21?>,
                        <?=$consumer->quantity->qty_08_21?>,
                        <?=$consumer->quantity->qty_09_21?>,
                        <?=$consumer->quantity->qty_10_21?>,
                        <?=$consumer->quantity->qty_11_21?>,
                        <?=$consumer->quantity->qty_12_21?>
            ],
            fill: false,
            borderColor: 'rgb(20, 22, 155)',
            tension: 0.1
        }]
        };
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });



    </script>
    @endrole
@endsection

@section('footer')
@endsection