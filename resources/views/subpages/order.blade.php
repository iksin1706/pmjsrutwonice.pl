<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ __('cookies.title') }}</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/scss/app.scss', 'resources/js/preloader.js', 'resources/js/nav.js'])
    <style>
        body {
            background: radial-gradient(circle at 0 100%, #20201e, #000) !important;
        }
    </style>
</head>

<body>
    <x-navigation fontClass="color--white"></x-navigation>
    <x-preloader></x-preloader>
    <section class="section pt-4 pb-3 d-flex flex-center" style="min-height: 100vh; max-width: 1600px w-100">
        <h1 class="heading-2 pb-3">Jak zamówić?</h1>
        <div class="d-flex w-100 flex-center">
            <ol class="step-list">
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Napisz lub zadzwoń</h2>
                                <p>Skontaktuj się z nami przedstawiając jakiego urządzenia potrzebujesz oraz czym sie
                                    zajmujesz tak abyśmy mogli przedstawić ci oferte dostosowaną do twoich potrzeb. <br>
                                    Aby to zrobić <a class="link" href="">Kliknij tutaj</a></p>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('img/icons/phone-icon.svg') }}" alt="Check" />
                            </div>
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Zapoznaj się z oferta</h2>
                                <p>Na maila otrzymasz oferte z aktualnymi cenami urządzenia którymi jesteś
                                    zainteresowany.
                                </p>
                            </div>

                            <div class="icon">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/13060/mail_outline_copy.svg"
                                    alt="Check" />
                            </div>
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Umów się na wizyte</h2>
                                <p> Jeżeli chcesz możesz się umówić na wizyte i zobaczyć oraz przetestować nasze
                                    urządzenia na żywo. Oczywiście o ile posiadamy taką na stanie:)</p>
                            </div>

                            <div class="icon">
                                <img src="{{ asset('img/icons/person-icon.svg') }}"
                                    alt="Check" />
                            </div>
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Zamów urządzenie</h2>
                                <p> A my odrazu po złożeniu zamówienia przystąpimy do jego produkcji. Czas oczekiwania
                                    jest
                                    zależny od urządzenia i ilości zamówień jednak jest o zwykle około miesiąca</p>
                            </div>

                            <div class="icon">
                                <img src="{{ asset('img/icons/order-icon.svg') }}"
                                    alt="Check" />
                            </div>
                        </div>
                    </div>
                </li>
                <li class="step-list__item">
                    <div class="step-list__item__inner">
                        <div class="content">
                            <div class="body">
                                <h2>Dostawa</h2>
                                <p>
                                    Gdy urządzenie bedzie gotowe oraz wszelkie formalności dopełnione zapakujemy je i
                                    wyślemy do ciebie.
                                </p>
                            </div>

                            <div class="icon">
                                <img src="{{ asset('img/icons/delivery-icon.svg') }}"
                                    alt="Check" />
                            </div>
                        </div>
                    </div>
                </li>
            </ol>
        </div>
    </section>
    @include('layout/footer')
</body>
