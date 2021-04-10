@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="ml-3">Контакти</h2>
        @include('messages.errors')
        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3522.704259658959!2d35.1252997348321!3d47.85059638453643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc674a4396dc63%3A0x5d0a41d564bfd91d!2z0JrQvtC80L_RjNGO0YLQtdGA0L3QsNGPINCQ0LrQsNC00LXQvNC40Y8g0KjQkNCTLCDQl9Cw0L_QvtGA0L7QttGM0LU!5e0!3m2!1sru!2sua!4v1590343947552!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>
        <section class="contacts">
            <div>
                <div>
                    <h4>Графік роботи</h4>
                    <p>Пн-Пт: 9.00-18.00; Сб-Нд: вихідні</p>
                </div>
                <div>
                    <h4>ЄДРПОУ</h4>
                    <p>77777777</p>
                </div>
                <div>
                    <h4>Зв'язок</h4>
                    <p>Телефон: +380737777777</p>
                    <p>E-mail: demo@gmail.com</p>
                </div>
   
            </div>
            
            <div>
                <a href="https://uk-ua.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/?lang=ru" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.behance.net/" target="_blank"><i class="fab fa-behance"></i></a>
                <a href="https://dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a>
                <a href="https://github.com/" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.android.com/" target="_blank"><i class="fab fa-android"></i></a>
                <a href="https://www.whatsapp.com/?lang=ru" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
        </section>


    </div>
@endsection