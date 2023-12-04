<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMJ | Śrutownice, Piaskarki, Malowanie Proszkowe</title>
    <meta name="description"
        content="Produkcja maszyn do renowacji i obróbki metali -  śrutowania, piaskowania, malowania proszkowego">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S0N1NN596J"></script>
    <script></script>


    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/odometer.min.js', 'resources/js/index.js', 'resources/js/preloader.js', 'resources/js/nav.js'])



</head>

<body>

    @include('cookies/cookies')
    <x-navigation fontClass="color--white"></x-navigation>
    <x-preloader></x-preloader>

    <div id="blasters" class="pop-up  rim-blasters">
        <button class="rim-blasters__btn btn btn--empty"
            onclick="document.querySelector('.pop-up').classList.remove('pop-up--active')"><i
                class="fa fa-arrow-left"></i></button>
        <div class="rim-blasters__wrapper d-flex flex-sa">
            <a href="rb7" class="rim-blaster rim-blaster__left">
                <img src="{{ asset('img/RB7.png') }}" alt="" class="rim-blaster__image">
                <p class="rim-blaster__info-wrapper w-100 text--center color--primary mt-1">
                    Rozmiar i Oszczędność
                </p>
                <h4 class="rim-blaster__name w-100 text--center stroke-primary">RB7</h4>
            </a>
            <a href="rb11" class="rim-blaster rim-blaster__right">
                <img src="{{ asset('img/RB11.png') }}" alt="" class="rim-blaster__image">
                <p class="rim-blaster__info-wrapper w-100 text--center color--black mt-1">
                    Moc i Pojemność
                </p>
                <h4 class="rim-blaster__name w-100 text--center stroke-black ">RB11</h4>
            </a>
        </div>
    </div>

    <main>
        <section class="section hero">
            <video autoplay muted loop id="myVideo" class="bg-video">
                <source src="videos/background.m4v" type="video/mp4">
                Video couldn't be loaded
            </video>
            <div class="bg-video__gradient"></div>
            <div class="bg-video__content">
                <header class="hero__header side-line">
                    <h1 class="header">{{ __('home.header') }}
                        <div class="header__roller">
                            <span class="header__roller__rolltext">{{ __('home.rims') }}<br />
                                {{ __('home.calipers') }}<br />
                                {{ __('home.turbins') }}<br />
                                <span class="header__roller__last">{{ __('home.more') }}</span><br />
                        </div>
                    </h1>
                    <div class="mt-1">
                        <a href="/products" class="btn btn--empty">{{ __('home.ourProducts') }}</a>
                        <a href="/about" class="btn btn-text">{{ __('home.about') }}</a>
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
            <section class="section section__row pt-3 pb-3" id="about" name="about">
                <div class="clamp">
                    <p class="about__description side-line--fade">
                        <span class="about__line">Jesteśmy polską firmą, która doskonale rozumie potrzeby firm
                            renowacyjnych i regeneracyjnych w całej Europie. </span>
                        <span class="about__line">Nasza mocna historia w renowacji felg stanowi solidne fundamenty
                            naszego know-how. </span>
                        <span class="about__line">Obecnie skupiamy się na produkcji wysokiej jakości maszyn oraz
                            dostarczaniu nowatorskich rozwiązań, aby wesprzeć rozwój branży</span>
                        <span class="about__line">Tworzymy artnerskie relacje oparte na wiedzy i doświadczeniu, gotowe
                            sprostać wyzwaniom Twojego biznesu.</span>
                    </p>
                </div>
                <img class="about__description__image clamp" src="{{ asset('img/logo2.png') }}"
                    alt="{{ __('home.logoAlt') }}" data-aos-offset="200" data-aos="fade-right">
            </section>
            <section class="section company-info background--dark--gradient pt-3 pb-3">
                <div class="section__row flex-sa">
                    <div class="europe clamp">
                        <img class="europe__image" loading="lazy" src="{{ asset('img/europe.svg') }}"
                            alt="{{ __('home.europeAlt') }}">
                        <div class="europe__arrows trigger">
                            <div class="arrow">
                                <svg xmlns:cc="http://creativecommons.org/ns#"
                                    xmlns:dc="http://purl.org/dc/elements/1.1/"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                    xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                    y="0px" viewBox="0 0 776.1 693.7" style="enable-background:new 0 0 776.1 693.7;"
                                    xml:space="preserve">

                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path class="st0"
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,0,0" />
                                            <g>
                                                <path class="st1"
                                                    d="M776.2,664.6c1.6,14.4-8.8,27.5-23.2,29.1s-27.5-8.8-29.1-23.2c-1.6-14.4,8.8-27.5,23.2-29.1     C761.5,639.8,774.6,650.1,776.2,664.6z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="arrow">
                                <svg xmlns:cc="http://creativecommons.org/ns#"
                                    xmlns:dc="http://purl.org/dc/elements/1.1/"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                    xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                    y="0px" viewBox="0 0 776.1 693.7" style="enable-background:new 0 0 776.1 693.7;"
                                    xml:space="preserve">
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path class="st0"
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,0,0" />
                                            <g>
                                                <path class="st1"
                                                    d="M776.2,664.6c1.6,14.4-8.8,27.5-23.2,29.1s-27.5-8.8-29.1-23.2c-1.6-14.4,8.8-27.5,23.2-29.1     C761.5,639.8,774.6,650.1,776.2,664.6z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="arrow">
                                <svg xmlns:cc="http://creativecommons.org/ns#"
                                    xmlns:dc="http://purl.org/dc/elements/1.1/"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                    xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                    y="0px" viewBox="0 0 776.1 693.7" style="enable-background:new 0 0 776.1 693.7;"
                                    xml:space="preserve">
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path class="st0"
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,0,0" />
                                            <g>
                                                <path class="st1"
                                                    d="M776.2,664.6c1.6,14.4-8.8,27.5-23.2,29.1s-27.5-8.8-29.1-23.2c-1.6-14.4,8.8-27.5,23.2-29.1     C761.5,639.8,774.6,650.1,776.2,664.6z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="arrow">
                                <svg xmlns:cc="http://creativecommons.org/ns#"
                                    xmlns:dc="http://purl.org/dc/elements/1.1/"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                    xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                    y="0px" viewBox="0 0 776.1 693.7" style="enable-background:new 0 0 776.1 693.7;"
                                    xml:space="preserve">
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path class="st0"
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,0,0" />
                                            <g>
                                                <path class="st1"
                                                    d="M776.2,664.6c1.6,14.4-8.8,27.5-23.2,29.1s-27.5-8.8-29.1-23.2c-1.6-14.4,8.8-27.5,23.2-29.1     C761.5,639.8,774.6,650.1,776.2,664.6z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="arrow">
                                <svg xmlns:cc="http://creativecommons.org/ns#"
                                    xmlns:dc="http://purl.org/dc/elements/1.1/"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                    xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                    y="0px" viewBox="0 0 776.1 693.7" style="enable-background:new 0 0 776.1 693.7;"
                                    xml:space="preserve">
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path class="st0"
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,0,0" />
                                            <g>
                                                <path class="st1"
                                                    d="M776.2,664.6c1.6,14.4-8.8,27.5-23.2,29.1s-27.5-8.8-29.1-23.2c-1.6-14.4,8.8-27.5,23.2-29.1     C761.5,639.8,774.6,650.1,776.2,664.6z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="arrow">
                                <svg xmlns:cc="http://creativecommons.org/ns#"
                                    xmlns:dc="http://purl.org/dc/elements/1.1/"
                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                    xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px"
                                    y="0px" viewBox="0 0 776.1 693.7" style="enable-background:new 0 0 776.1 693.7;"
                                    xml:space="preserve">
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path class="st0"
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,0,0" />
                                            <g>
                                                <path class="st1"
                                                    d="M776.2,664.6c1.6,14.4-8.8,27.5-23.2,29.1s-27.5-8.8-29.1-23.2c-1.6-14.4,8.8-27.5,23.2-29.1     C761.5,639.8,774.6,650.1,776.2,664.6z" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>

                        </div>
                    </div>
                    <div class="company-info__stats trigger clamp d-flex flex-r">
                        <div class="stats trigger">
                            <div class="stat__number flex-r odometer" id="number1" value="10" data-after="+">
                                00</div>
                            <div class="stat__description">{{ __('home.experience') }}</div>

                            <div class="stat__number flex-r odometer" id="number2" value="11" data-after="+">
                                00</div>
                            <div class="stat__description">{{ __('home.countries') }}</div>

                            <div class="stat__number flex-r odometer" id="number3" value="684"data-after="+">000
                            </div>
                            <div class="stat__description">{{ __('home.happyClients') }}</div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pb-3">
                <h2 class="heading-2 mt-3 mb-2 text--center w-100" id="products">{{ __('home.discover') }}</h2>
                </p>
                <div class="slider trigger animation-finished pb-3">
                    <div class="slide">
                        <div class="slide-content">
                            <div class="slide__image-container">
                                <img class="slide__image " draggable="false" src="{{ asset('img/test.png') }}"
                                    alt="{{ __('home.rimBlastersAlt') }}">
                            </div>
                            <h3 class="slide__preview">{{ __('home.rimBlasters') }}</h3>
                            <div class="slide__text">
                                <h3>{{ __('home.rimBlasters') }}</h3>
                                <p>{{ __('home.rimBlastersDescription') }}</p>

                            </div>
                            <a class="slide__btn btn btn--filled"
                                onclick="document.querySelector('.pop-up').classList.add('pop-up--active')">{{ __('home.seeOffer') }}</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="slide__image-container">
                                <img class="slide__image" draggable="false" src="{{ asset('img/test.png') }}"
                                    alt="{{ __('home.dustCollectorsAlt') }}">
                            </div>
                            <h3 class="slide__preview">{{ __('home.dustCollectors') }}</h3>
                            <div class="slide__text">
                                <h3>{{ __('home.dustCollectors') }}</h3>
                                <p>{{ __('home.dustCollectorsDescription') }}</p>
                            </div>
                            <a class="slide__btn btn btn--filled">{{ __('home.seeOffer') }}</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="slide__image-container">
                                <img class="slide__image" draggable="false" src="{{ asset('img/test.png') }}"
                                    alt="{{ __('home.sandblastersAlt') }}">
                            </div>
                            <h3 class="slide__preview">{{ __('home.sandblasters') }}</h3>
                            <div class="slide__text">
                                <h3>{{ __('home.sandblasters') }}</h3>
                                <p>{{ __('home.sandblastersDescription') }}</p>
                            </div>
                            <a class="slide__btn btn btn--filled">{{ __('home.seeOffer') }}</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class=" slide__image-container">
                                <img class="slide__image" draggable="false" src="{{ asset('img/test.png') }}"
                                    alt="{{ __('home.ovenAlt') }}">
                            </div>
                            <h3 class="slide__preview">{{ __('home.oven') }}</h3>
                            <div class="slide__text">
                                <h3>{{ __('home.oven') }}</h3>
                                <p>{{ __('home.ovenDescription') }}</p>
                            </div>
                            <a class="slide__btn btn btn--filled">{{ __('home.seeOffer') }}</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="slide__image-container">
                                <img class="slide__image" draggable="false" src="{{ asset('img/test.png') }}"
                                    alt="{{ __('home.otherAlt') }}">
                            </div>
                            <h3 class="slide__preview">{{ __('home.other') }}</h3>
                            <div class="slide__text">
                                <h3>{{ __('home.other') }}</h3>
                                <p>{{ __('home.otherDescription') }}</p>
                            </div>
                            <a class="slide__btn btn btn--filled">{{ __('home.seeOffer') }}</a>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <section class="flagship section pt-4" style="background-image: url('{{ asset('img/background.jpg') }}');">
            <div class="section__row">
                <div class="flagship__text clamp ">
                    <h2 class="heading-2 color--black">{{ __('home.flagship') }}</h2>
                    <p class="paragraph mt-2 mb-2 color--black text--normal">
                        {{ __('home.flagshipDescription') }}
                    </p>
                    <a href="rb11" class="flagship__btn btn btn--filled">{{ __('home.learnMore') }}</a>
                </div>
                <img class="flagship__image clamp--smaller" src="{{ asset('img/rb1111.png') }}"
                    alt="{{ __('home.rimBlastersAlt') }}">
            </div>
            <div class="beforeafter">
                <h3 class="color--black">{{ __('home.before') }}</h3>
                <h3 class="color--primary">{{ __('home.after') }}</h3>
            </div>

            <div class="banner-container">
                <div id="banner-wrapper" class="banner-wrapper">
                    <div class="banner design trigger">
                        <div class="banner-content">
                            <img src="{{ asset('img/normal2.png') }}" alt="{{ __('home.normalRimAlt') }}" />
                        </div>
                    </div>
                    <div class="banner dev">
                        <div class="banner-content">
                            <img src="{{ asset('img/rust2.png') }}" alt="{{ __('home.rustRimAlt') }}" />
                        </div>
                    </div>
                </div>
        </section>
        <section class="section contact pt-3 pb-3" id="contact">
            <h2 class="contact__label trigger text-center w-100">{{ __('home.interested') }} <a
                    href="tel:+48726120051"> <span class="underlined">+48 726 120 051</span></a> </h2>

            <div class="section__row contact__container d-flex flex-sb">
                <div class="contact__left clamp">
                    <div class="contact__card ">
                        <div class="">
                            <ul class="contact__list">
                                <li>Mateusz Jasiński</li>
                                <li><a href="mail:biuro@pmjśrutownice.pl">biuro@pmjśrutownice.pl</a></li>
                                <li><a href="tel:+48726120051">+48 726 120 051</a></li>
                                <li>Ustrobna 302</li>
                            </ul>
                            <div class="social-media">
                                <a class="social-media__item" href="" aria-label="Link to Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="social-media__item" aria-label="Link to Youtube">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="social-media__item" aria-label="Link to Instagram">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact__right clamp">
                    <picture class="poland">
                        <source srcset="{{ asset('img/poland.svg') }}" media="(orientation: portrait)" />
                        <img src="{{ asset('img/poland.svg') }}" alt="{{ __('home.polandAlt') }}">
                    </picture>
                </div>
            </div>
            <h2 class="contact__label text-center trigger">{{ __('home.question') }} <a href="faq"
                    class="underlined ">
                    {{ __('home.clickHere') }}</a> {{ __('home.toFAQ') }}</h2>
            <div class="contact__label">{{ __('home.or') }}</div>
            <div class="write-to-us"
                style="background-image: linear-gradient(105deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.9) 50%, transparent 50%), url('{{ asset('img/contact-background.webp') }}')">
                <div class="write-to-us__form">
                    <form action="#" class="form" id="email-form">
                        @csrf
                        <h3 class="heading-2 mb-2">
                            {{ __('home.contactUs') }}
                        </h3>
                        <div class="form__group">
                            <input id="recipient" name="recipient" type="email" class="form__input"
                                placeholder="Email" required />
                            <label for="email" class="form__label">Email</label>
                        </div>

                        <div class="form__group">
                            <textarea id="messgae" name="message" rows="10" id="name" type="text-area" class="form__input area"
                                placeholder="Treść" required></textarea>
                            <label for="name" class="form__label">{{ __('home.question') }}</label>
                        </div>

                        <div class="form-group">
                            <button class="email-send btn btn--filled">{{ __('home.send') }} &rarr;</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>
    @include('layout/footer')

    <div class="email-popup" style="display: none">
        <div class="email-popup__container">
            <div class="email-popup__info">
                <div class="email-popup__loader">
                </div>
                <div class="email-popup__success">
                    <i class="fa fa-check"></i>
                </div>
            </div>
            <div class="email-popup__status text--center mt-1">{{ __('home.sending') }}...</div>
        </div>

    </div>
</body>

</html>
