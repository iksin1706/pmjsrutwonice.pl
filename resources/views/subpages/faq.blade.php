<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ __('faq.title') }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/index.js', 'resources/js/preloader.js', 'resources/js/nav.js'])
    <style>
        body {
            background: radial-gradient(circle at 0 100%, #20201e, #000) !important;
        }
    </style>
</head>




<body>
    <x-navigation fontClass="color--white"></x-navigation>
    <x-preloader></x-preloader>
    <div style="width: 100vw; height: 100vh" class="d-flex flex-center">

        <div class="faq-container">

            @foreach( __('faq.qa') as $qa)
            <div class="faq-item">
                <div class="faq-question"> {{!!$qa->question!!}}</div>
                <div class="icon-container"><i class="fa fa-arrow-right"></i></div>
            </div>
            <div class="faq-answer">
                <p> {{!! $qa->anserw !!}}</p>
            </div>             
            @endforeach
        </div>
    </div>
    @include('layout/footer')
    <script>
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.nextElementSibling;
            const icon = item.querySelector('i');

            item.addEventListener('click', () => {
                faqItems.forEach(otherItem => {
                    if (otherItem !== item) {
                        const otherAnswer = otherItem.nextElementSibling;
                        const otherIcon = otherItem.querySelector('i');

                        otherAnswer.classList.remove('active');
                        otherIcon.classList.remove('active');
                        otherAnswer.style.maxHeight = "0";
                    }
                });

                answer.classList.toggle('active');
                icon.classList.toggle('active');
                if (answer.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                    answer.style.maxHeight = "0";
                }
            });
        });
    </script>
</body>
