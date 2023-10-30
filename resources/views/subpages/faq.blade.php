<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMJ | Śrutownice, Piaskarki, Malowanie Proszkowe</title>
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
            <div class="faq-item">
                <div class="faq-question">What is Lorem Ipsum?</div>
                <div class="icon-container"><i class="fa fa-arrow-right"></i></div>
            </div>
            <div class="faq-answer">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="faq-item">
                <div class="faq-question">Why do we use it?</div>
                <div class="icon-container"><i class="fa fa-arrow-right"></i></div>
            </div>
            <div class="faq-answer">
                <p>To fill the blank elements on the page.</p>
            </div>
            <div class="faq-item">
                <div class="faq-question">Where can I get some?</div>
                <div class="icon-container"><i class="fa fa-arrow-right"></i></div>
            </div>
            <div class="faq-answer">
                <p>There are many variations of passages of Lorem Ipsum available, but i use lipsum.com.</p>
            </div>
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
