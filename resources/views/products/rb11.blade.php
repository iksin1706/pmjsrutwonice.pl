<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RB11 - Śrutownica, Piaskarka Automaczyna</title>
    <meta name="description"
        content="Śrutownica piaskarka automatyczna RB11 - urządzenie do czyszczenia felg, zacisków, turbiny">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="dark">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/odometer.min.js', 'resources/js/product.js', 'resources/js/nav.js', 'resources/js/preloader.js'])

</head>

<body>

    <x-navigation fontClass="color--black"></x-navigation>
    <x-preloader></x-preloader>
    <main class="product">
        <section class="section product__hero"
            style="background-image: linear-gradient(#ffffff00 70%,rgb(0, 0, 0)), url('{{ asset('img/rb11.jpg') }}')">
            <h1 class="product__hero__heading">Śrutownica RB11</h1>
            <div class="product__hero__stats">
                <div class="product__hero__stats__item d-flex
                color-white flex-center">
                    <h5 class="odometer " value="11" data-after="kW">11</h5>
                    <p>{{ __('products/rb11.power') }}</p>
                </div>
                <div class="product__hero__stats__item d-flex color-white flex-center">
                    <h5 class="odometer" value="4" data-after="min"></h5>
                    <p>{{ __('products/rb11.time') }}</p>
                </div>
                <div class="product__hero__stats__item d-flex color-white flex-center">
                    <h5 class="odometer" value="100" data-after="%">100</h5>
                    <p>{{ __('products/rb11.happines') }}</p>
                </div>
            </div>
        </section>
        <section class="section product__about ">
            <div class="row">
                <div class="side-line--fade">
                    <h2 class="heading-2" data-aos="fade-up">{{ __('products/rb11.aboutHeading') }}</h2>
                    <p class="paragraph color-white" data-aos="fade-up">
                        {{ __('products/rb11.aboutDescription') }}
                    </p>
                </div>
            </div>
        </section>
        <section class="swiper-section background--dark--gradient">
            <div class="row" style="height: 100%">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2"
                    data-aos="fade-up">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/rb11.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/rb11.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/rb11.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/rb11.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('img/rb11.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/rb11.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('img/rb11.jpg') }}" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section product__usages">
            <div class="w-100">
                <h2 class="heading-2 text--center mb-2">{{ __('products/rb11.usages') }}</h2>
                <div class="row">
                    <div class="col-1-of-3" style="margin-bottom: 0">
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-offset="300"
                            data-aos-delay="0">
                            <img src="{{ asset('img/icons/rim-icon.svg') }}" class="product__usages__item__icon">
                            <h4 class="product__usages__item__header"> {{ __('products/rb11.usage1Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/rb11.usage1Description') }}
                            </p>
                        </div>
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-offset="300"
                            data-aos-delay="100">
                            <img src="{{ asset('img/icons/brakes-icon.svg') }}" class="product__usages__item__icon">
                            <h4 class="product__usages__item__header"> {{ __('products/rb11.usage2Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/rb11.usage2Description') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-3 product__usages__image">
                        <img class="product__usages__image" src="{{ asset('img/RB11.png') }}" alt=""
                            data-aos="fade-up">
                    </div>
                    <div class="col-1-of-3">
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-offset="300"
                            data-aos-delay="200">
                            <img src="{{ asset('img/icons/turbo-icon.svg') }}" class="product__usages__item__icon">

                            <h4 class="product__usages__item__header"> {{ __('products/rb11.usage3Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/rb11.usage3Description') }}
                            </p>
                        </div>
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-offset="300"
                            data-aos-delay="300">
                            <img src="{{ asset('img/icons/starter-icon.svg') }}" class="product__usages__item__icon">

                            <h4 class="product__usages__item__header"> {{ __('products/rb11.usage4Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/rb11.usage4Description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section product__modes">
            <h2 class="heading-2 text-center mb-2 text--center">
                {{ __('products/rb11.modes') }}
            </h2>

            <div class="cards__wrapper cards row">
                <div class="col-1-of-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card card--1 m-1 ">
                        <img class="card__image" src="{{ asset('img/rollers.png') }}" alt="">
                        <p class="card__paragraph text-left"> {{ __('products/rb11.mode1') }}</p>
                    </div>
                </div>
                <div class="col-1-of-3" data-aos="fade-up">
                    <div class="card card--2 m-1 card--border-animation">
                        <img class="card__image" src="{{ asset('img/zaw.png') }}" alt="">
                        <p class="card__paragraph text-left" style="text-align: justify;">
                            {{ __('products/rb11.mode2') }}
                        </p>
                    </div>
                </div>
                <div class="col-1-of-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card card--3 m-1 ">
                        <img class="card__image" src="{{ asset('img/kosz.png') }}" alt="">
                        <p class="card__paragraph text-left">
                            {{ __('products/rb11.mode3') }}
                        </p>
                    </div>
                </div>
            </div>
            <h5 class="heading-3 product__underlined text--center color-white mt-3 pb-3">

                {{ __('products/rb11.airPart1') }} <span class="underlined"> {{ __('products/rb11.airPart2') }}
                </span> {{ __('products/rb11.airPart3') }}

            </h5>
        </section>


        <section class="section product__info pb-3">
            <div class="product__text-image row product__text-image--left d-flex flex-center pt-3 pb-3">
                <div class="product__text-image__wrapper row d-flex flex-center w-100" data-aos="fade-right"
                    data-aos-delay="0" data-aos-offset="300">
                    <div class="col-1-of-2">
                        <article class="product__text-image__text side-line--fade">
                            <div class="product__about__heading">
                                <h2 class="heading-2 color-white"> {{ __('products/rb11.motorHeading') }}</h2>
                            </div>
                            <p class="color-white">
                                {{ __('products/rb11.motorDescription') }}
                            </p>
                        </article>
                    </div>
                    <div class="col-1-of-2">
                        <img class="product__text-image__image" src="{{ asset('img/silnik.png') }}"
                            alt=" {{ __('products/rb11.motorAlt') }}">
                    </div>
                </div>
            </div>
            <div class="product__text-image--right row d-flex flex-center pt-3 pb-3">
                <div class="product__text-image__wrapper d-flex flex-center w-100" data-aos="fade-left"
                    data-aos-delay="0" data-aos-offset="300">
                    <div class="col-1-of-2">
                        <img class="product__text-image__image" src="{{ asset('img/pan.png') }}" alt="">
                    </div>
                    <div class="col-1-of-2">
                        <article class="product__text-image__text side-line--fade--right">
                            <div class="product__about__heading">
                                <h2 class="heading-2 color-white"> {{ __('products/rb11.uiHeading') }}</h2>
                            </div>
                            <p class="color-white">
                                {{ __('products/rb11.uiDescription') }}
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <section class="section product__technical-data">
            <div class="row">
                <div class="col-1-of-2">
                    <table class="table-fill mt-2">
                        <thead>
                            <tr>
                                <th class="text-left" colspan="2">
                                    <h3>{{ __('products/rb11.technicalData') }}</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <tr>
                                <td class="text-left">{{ __('products/rb11.data1') }}</td>
                                <td class="text-left">208 cm</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/rb11.data2') }}</td>
                                <td class="text-left">140 cm</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/rb11.data3') }}</td>
                                <td class="text-left">130 cm</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/rb11.data4') }}</td>
                                <td class="text-left">950 kg</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/rb11.data5') }}</td>
                                <td class="text-left">11 kW</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-1-of-2 product__dimensions">
                    <img class="product__dimensions__image" src="{{ asset('img/dim.png') }}" alt="">
                </div>
            </div>
        </section>

        <section class="section product__video d-flex flex-center background--dark--gradient">
            <h2 class="heading-2 text--center mb-2">{{ __('products/rb11.video') }}</h2>
            <iframe class="product__video__box" width="1200" height="600"
                src="https://www.youtube.com/embed/4O6l8ObJY2I?si=fZ7rDDWu0hVEavrt" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

        </section>
        {{-- <section class="section background--black ">
            <div class="row d-flex flex-center">

                <div class="col-1-of-2">
                    <h2 class="paragraph text--left">Aby zapewnić naszym klientom jak najlepsze dostosowanie do ich
                        potrzeb
                        nasze produkty tworzone są na zamówienie. Zapytaj o wycene korzystając z naszego formularza
                        kontaktowego
                        kliknij tutaj
                        <a href="link" class="link">Kliknij tutaj</a>
                    </h2>
                </div>
                <div class="col-1-of-2 glow">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#FBDB04"
                        height="300px" width="300px" version="1.1" id="Layer_1" viewBox="0 0 491.1 491.1"
                        xml:space="preserve">
                        <g transform="translate(0 -540.36)">
                            <g>
                                <g>
                                    <path
                                        d="M401.5,863.31c-12,0-23.4,4.7-32,13.2c-8.6,8.6-13.4,19.8-13.4,31.8s4.7,23.2,13.4,31.8c8.7,8.5,20,13.2,32,13.2     c24.6,0,44.6-20.2,44.6-45S426.1,863.31,401.5,863.31z M401.5,933.31c-13.8,0-25.4-11.4-25.4-25s11.6-25,25.4-25     c13.6,0,24.6,11.2,24.6,25S415.1,933.31,401.5,933.31z" />
                                    <path
                                        d="M413.1,713.41c-1.8-1.7-4.2-2.6-6.7-2.6h-51.3c-5.5,0-10,4.5-10,10v82c0,5.5,4.5,10,10,10h81.4c5.5,0,10-4.5,10-10v-54.9     c0-2.8-1.2-5.5-3.3-7.4L413.1,713.41z M426.5,792.81h-61.4v-62.1h37.4l24,21.6V792.81z" />
                                    <path
                                        d="M157.3,863.31c-12,0-23.4,4.7-32,13.2c-8.6,8.6-13.4,19.8-13.4,31.8s4.7,23.2,13.4,31.8c8.7,8.5,20,13.2,32,13.2     c24.6,0,44.6-20.2,44.6-45S181.9,863.31,157.3,863.31z M157.3,933.31c-13.8,0-25.4-11.4-25.4-25s11.6-25,25.4-25     c13.6,0,24.6,11.2,24.6,25S170.9,933.31,157.3,933.31z" />
                                    <path
                                        d="M90.6,875.61H70.5v-26.6c0-5.5-4.5-10-10-10s-10,4.5-10,10v36.6c0,5.5,4.5,10,10,10h30.1c5.5,0,10-4.5,10-10     S96.1,875.61,90.6,875.61z" />
                                    <path
                                        d="M141.3,821.11c0-5.5-4.5-10-10-10H10c-5.5,0-10,4.5-10,10s4.5,10,10,10h121.3C136.8,831.11,141.3,826.71,141.3,821.11z" />
                                    <path
                                        d="M30.3,785.01l121.3,0.7c5.5,0,10-4.4,10.1-9.9c0.1-5.6-4.4-10.1-9.9-10.1l-121.3-0.7c-0.1,0-0.1,0-0.1,0     c-5.5,0-10,4.4-10,9.9C20.3,780.51,24.8,785.01,30.3,785.01z" />
                                    <path
                                        d="M50.7,739.61H172c5.5,0,10-4.5,10-10s-4.5-10-10-10H50.7c-5.5,0-10,4.5-10,10S45.2,739.61,50.7,739.61z" />
                                    <path
                                        d="M487.4,726.11L487.4,726.11l-71.6-59.3c-1.8-1.5-4-2.3-6.4-2.3h-84.2v-36c0-5.5-4.5-10-10-10H60.5c-5.5,0-10,4.5-10,10     v73.2c0,5.5,4.5,10,10,10s10-4.5,10-10v-63.2h234.8v237.1h-82c-5.5,0-10,4.5-10,10s4.5,10,10,10h122.1c5.5,0,10-4.5,10-10     s-4.5-10-10-10h-20.1v-191.1h80.6l65.2,54l-0.7,136.9H460c-5.5,0-10,4.5-10,10s4.5,10,10,10h20.3c5.5,0,10-4.4,10-9.9l0.8-151.6     C491,730.91,489.7,728.01,487.4,726.11z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </section> --}}
        <section class="product__recommend d-flex flex-center">
            <div class="row">
                <div class="col-1-of-2">
                    <article class="about__text paragraph trigger side-line--fade">
                        <h2 class="heading-2 mt-2">{{ __('products/rb11.recommendHeading') }}</h2>
                        <p>
                            {{ __('products/rb11.recommendProductDescription') }}
                        </p>
                        <a class="mt-2 btn btn--filled" href="pf90.html">{{ __('products/rb11.learnMore') }}</a>
                        </p>
                    </article>
                </div>
                <div class="col-1-of-2">
                    <img class="product__recommend__image" src="{{ asset('img/pf90.png') }}"
                        alt="{{ __('products/rb11.recommendAlt') }}">
                </div>
            </div>
        </section>
    </main>

    @include('layout/footer')
</body>
