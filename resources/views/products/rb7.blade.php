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

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/odometer.min.js', 'resources/js/product.js', 'resources/js/nav.js', 'resources/js/preloader.js'])

</head>

<body>
    <x-navigation fontClass="color--black"></x-navigation>
    <x-preloader></x-preloader>
    <main class="product">
        <section class="section product__hero"
            style="background-image: linear-gradient(#ffffff00 50%,rgb(0, 0, 0)), url('{{ asset('img/rb7-hero.png') }}')">
            <h1 class="product__hero__heading">Śrutownica RB7</h1>
            <div class="product__hero__stats">
                <div class="product__hero__stats__item d-flex
                color-white flex-center">
                    <h5 class="odometer " value="7" data-after="kW">7</h5>
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
                    <h2 class="heading-2">{{ __('products/rb7.aboutHeading') }}</h2>
                    <p class="paragraph color-white">
                        {{ __('products/rb7.aboutDescription') }}
                    </p>
                </div>
            </div>
        </section>
        <section class="swiper-section background--dark--gradient">
            <div class="row" style="height: 100%">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
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
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
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
                <h2 class="heading-2 text--center mb-2">{{ __('products/rb7.usages') }}</h2>
                <div class="row">
                    <div class="col-1-of-3" style="margin-bottom: 0">
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="200"
                            data-aos-offset="300">
                            <img src="{{ asset('img/icons/rim-icon.svg') }}" class="product__usages__item__icon">
                            <h4 class="product__usages__item__header"> {{ __('products/rb7.usage1Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/rb7.usage1Description') }}
                            </p>
                        </div>
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('img/icons/brakes-icon.svg') }}" class="product__usages__item__icon">
                            <h4 class="product__usages__item__header"> {{ __('products/rb7.usage2Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/rb7.usage2Description') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-3 product__usages__image">
                        <img class="product__usages__image" src="{{ asset('img/rb7.png') }}" alt=""
                            data-aos="fade-up">
                    </div>
                    <div class="col-1-of-3">
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="300"
                            data-aos-offset="300">
                            <img src="{{ asset('img/icons/turbo-icon.svg') }}" class="product__usages__item__icon">

                            <h4 class="product__usages__item__header"> {{ __('products/rb7.usage3Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/rb7.usage3Description') }}
                            </p>
                        </div>
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="500">
                            <img src="{{ asset('img/icons/starter-icon.svg') }}" class="product__usages__item__icon">

                            <h4 class="product__usages__item__header"> {{ __('products/rb7.usage4Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/rb7.usage4Description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section product__modes">
            <h2 class="heading-2 text-center mb-2 text--center">
                {{ __('products/rb7.modes') }}
            </h2>

            <div class="cards__wrapper row">
                <div class="col-1-of-2 d-flex flex-center">
                    <div class="card card--1 m-1 " data-aos="fade-up">
                        <img class="card__image" src="{{ asset('img/rollers.png') }}" alt="">
                        <p class="card__paragraph text-left"> {{ __('products/rb7.mode1') }}</p>
                    </div>
                </div>
                <div class="col-1-of-2 d-flex flex-center">
                    <div class="card card--3 m-1 " data-aos="fade-up" data-aos-delay="200">
                        <img class="card__image" src="{{ asset('img/kosz.png') }}" alt="">
                        <p class="card__paragraph text-left">
                            {{ __('products/rb7.mode3') }}
                        </p>
                    </div>
                </div>
            </div>
            <h5 class="heading-3 product__underlined text--center color-white mt-3 pb-3">

                {{ __('products/rb7.airPart1') }} <span class="underlined"> {{ __('products/rb7.airPart2') }} </span>
                {{ __('products/rb7.airPart3') }}

            </h5>
        </section>


        <section class="section product__info pb-3">
            <div class="product__text-image row product__text-image--left d-flex flex-center pt-3 pb-3">
                <div class="product__text-image__wrapper row d-flex flex-center w-100" data-aos="fade-right"
                    data-aos-delay="0" data-aos-offset="300">
                    <div class="col-1-of-2">
                        <article class="product__text-image__text side-line--fade">
                            <div class="product__about__heading">
                                <h2 class="heading-2 color-white"> {{ __('products/rb7.motorHeading') }}</h2>
                            </div>
                            <p class="color-white">
                                {{ __('products/rb7.motorDescription') }}
                            </p>
                        </article>
                    </div>
                    <div class="col-1-of-2">
                        <img class="product__text-image__image" src="{{ asset('img/silnik.png') }}"
                            alt=" {{ __('products/rb7.motorAlt') }}">
                    </div>
                </div>
            </div>
            <div class="product__text-image--right row d-flex flex-center pt-3 pb-3">
                <div class="product__text-image__wrapper d-flex flex-center w-100" data-aos="fade-right"
                    data-aos-delay="0" data-aos-offset="300">
                    <div class="col-1-of-2">
                        <img class="product__text-image__image clamp" src="{{ asset('img/pan.png') }}"
                            alt="">
                    </div>
                    <div class="col-1-of-2">
                        <article class="product__text-image__text side-line--fade--right">
                            <div class="product__about__heading">
                                <h2 class="heading-2 color-white"> {{ __('products/rb7.uiHeading') }}</h2>
                            </div>
                            <p class="color-white">
                                {{ __('products/rb7.uiDescription') }}
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
                                    <h3>{{ __('products/rb7.technicalData') }}</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <tr>
                                <td class="text-left">{{ __('products/rb7.data1') }}</td>
                                <td class="text-left">190 cm</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/rb7.data2') }}</td>
                                <td class="text-left">130 cm</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/rb7.data3') }}</td>
                                <td class="text-left">100 cm</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/rb7.data4') }}</td>
                                <td class="text-left">850 kg</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/rb7.data5') }}</td>
                                <td class="text-left">7 kW</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-1-of-2 product__dimensions">
                    <img class="product__dimensions__image" src="{{ asset('img/rb7.png') }}" alt="">
                </div>
            </div>
        </section>

        <section class="section product__video d-flex flex-center background--dark--gradient">
            <h2 class="heading-2 text--center mb-2">{{ __('products/rb7.video') }}</h2>
            <iframe class="product__video__box" width="1200" height="600"
                src="https://www.youtube.com/embed/4O6l8ObJY2I?si=fZ7rDDWu0hVEavrt" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

        </section>
        <section class="section background--dark--gradient">
            <h2 class="heading-2">Aby zapewnić naszym klientom jak najlepsze dostosowanie do ich potrzeb nasze produkty
                tworzone są na zamówienie. Aby przejść do formularza kontaktowego kliknij tutaj 
                <a href="link">Kliknij tutaj</a></h2>
        </section>

        <section class="product__recommend d-flex flex-center">
            <div class="row">
                <div class="col-1-of-2">
                    <article class="about__text paragraph trigger side-line--fade">
                        <h2 class="heading-2 mt-2">{{ __('products/rb7.recommendHeading') }}</h2>
                        <p>
                            {{ __('products/rb7.recommendProductDescription') }}
                        </p>
                        <a class="mt-2 btn btn--filled" href="pf90.html">{{ __('products/rb7.learnMore') }}</a>
                        </p>
                    </article>
                </div>
                <div class="col-1-of-2">
                    <img class="product__recommend__image" src="{{ asset('img/pf90.png') }}"
                        alt="{{ __('products/rb7.recommendAlt') }}">
                </div>
            </div>
        </section>
    </main>

    @include('layout/footer')
</body>
