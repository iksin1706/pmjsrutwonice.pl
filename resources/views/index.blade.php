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

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('nav')
    <main>
        <section class="section hero">
            <video autoplay muted loop id="myVideo" class="bg-video">
                <source src="videos/background.m4v" type="video/mp4">
                Video couldn't be loaded
            </video>
            <div class="bg-video__gradient"></div>
            <div class="bg-video__content">
                <header class="hero__header side-line">
                    <h1 class="header">Z naszymi produktami zregenerujesz
                        <div class="header__roller">
                            <span class="header__roller__rolltext">Felgi<br />
                                Zaciski<br />
                                Turbiny<br />
                                <span class="header__roller__last">i wiele innych ...</span><br />
                        </div>
                    </h1>
                    <div class="mt-1">
                        <a href="/produkty" class="btn btn--empty">Nasze produkty</a>
                        <a href="/o-nas" class="btn btn-text">O nas</a>
                    </div>
                </header>
            </div>
            <div class="scroll-down">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        <article class="about">
            <section class="section about__description row" id="about" name="about">
                <div class="about__description__text side-line--fade clamp">
                    <h2 class="heading-2 ">O nas</h2>
                    <p class="paragraph">
                    Jesteśmy polską firmą, która doskonale rozumie potrzeby
                    firm renowacyjnych i regeneracyjnych w całej Europie.
                    Nasza mocna historia w renowacji felg stanowi solidne
                    fundamenty naszego know-how.
                    Obecnie skupiamy się na produkcji wysokiej jakości
                    maszyn oraz dostarczaniu nowatorskich rozwiązań,
                    aby wesprzeć rozwój branży. Tworzymy partnerskie
                    relacje oparte na wiedzy i doświadczeniu, gotowe sprostać wyzwaniom Twojego
                    biznesu.
                    </p>
                </div>
                <img class="about__description__image clamp" src="{{asset('img/logo2.png')}}" alt="Logo of Company">
            </section>
            <section class="section company-info background--dark--gradient">
                <h2 class="heading-2 bottom-line--fade w-50 mb-3 clamp">Nasza firma w liczbach</h2>
                <div class="row">
                    <div class="europe clamp">
                        <img class="europe__image" loading="lazy" src="{{asset('img/europe.svg')}}" alt="Map of Europe">
                        <div class="europe__arrows trigger">
                            <div class="arrow">
                                <img src="{{asset('img/arrow.svg')}}">
                            </div>
                            <div class="arrow">
                                <img src="{{asset('img/arrow.svg')}}">
                            </div>
                            <div class="arrow">
                                <img src="{{asset('img/arrow.svg')}}">
                            </div>
                            <div class="arrow">
                                <img src="{{asset('img/arrow.svg')}}">
                            </div>
                            <div class="arrow">
                                <img src="{{asset('img/arrow.svg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="company-info__stats trigger clamp">
                        <div class="stat">
                            <div class="stat__number" id="number1">0</div>
                            <div class="stat__description">Lat doświadczenia</div>

                            <div class="stat__number" id="number2">0</div>
                            <div class="stat__description">Krajów sprzedażowych</div>

                            <div class="stat__number" id="number3">0</div>
                            <div class="stat__description">Zadowolonych klientów</div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
    @include('footer')
</body>

</html>
