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

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/product.js', 'resources/js/nav.js', 'resources/js/preloader.js'])

</head>

<body>
    <x-navigation fontClass="color--black"></x-navigation>
    <x-preloader></x-preloader>
    <main class="product">
        <section class="section product__hero"
            style="background-image: linear-gradient(#ffffff00 50%,rgb(0, 0, 0)), url('{{ asset('img/pk1-hero.png') }}')">
            {{-- <h1 class="product__hero__heading">RB11</h1> --}}
            <div class="product__hero__stats" style="width:100%; bottom:20%">
                <h1 class="w-100 text--center product__hero__header" >{{ __('products/pk1.name') }}</h1>
            </div>
        </section>
        <section class="section product__about ">
            <div class="row">
                <div class="side-line--fade">
                    <h2 class="heading-2">{{ __('products/pk1.aboutHeading') }}</h2>
                    <p class="paragraph color-white">
                        {{ __('products/pk1.aboutDescription1') }}
                    </p>
                    <br>
                    <p class="paragraph color-white">
                        {{ __('products/pk1.aboutDescription2') }}
                    </p>
                    <br>
                    <p class="paragraph color-white">
                        {{ __('products/pk1.aboutDescription3') }}
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
                <h2 class="heading-2 text--center mb-2">{{ __('products/pk1.benefits') }}</h2>
                <div class="row">
                    <div class="col-1-of-3" style="margin-bottom: 0">
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="200"
                            data-aos-offset="300">
                            <h4 class="product__usages__item__header"> {{ __('products/pk1.benefit1Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/pk1.benefit1Description') }}
                            </p>
                        </div>
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="300">
                            <h4 class="product__usages__item__header"> {{ __('products/pk1.benefit2Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/pk1.benefit2Description') }}
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-3 product__usages__image">
                        <img class="product__usages__image" src="{{ asset('img/pk1.png') }}" alt=""
                            data-aos="fade-up">
                    </div>
                    <div class="col-1-of-3">
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="300"
                            data-aos-offset="300">

                            <h4 class="product__usages__item__header"> {{ __('products/pk1.benefit3Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/pk1.benefit3Description') }}
                            </p>
                        </div>
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="500">

                            <h4 class="product__usages__item__header"> {{ __('products/pk1.benefit4Header') }}</h4>
                            <p class="product__usages__item__text">
                                {{ __('products/pk1.benefit4Description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section product__info pb-3">
            <div class="product__text-image row product__text-image--left d-flex flex-center pt-3 pb-3">
                <div class="product__text-image__wrapper row d-flex flex-center w-100" data-aos="fade-right"
                    data-aos-delay="0" data-aos-offset="300">
                    <div class="col-1-of-2">
                        <article class="product__text-image__text ">
                            <div class="product__about__heading">
                                <h2 class="heading-2 color-white"> {{ __('products/pk1.nozzle') }}</h2>
                            </div>
                            <p class="color-white">
                            <ul class="product__list">
                                <li>4.8mm</li>
                                <li>6mm</li>
                                <li>8mm</li>
                            </ul>
                            </p>
                        </article>
                    </div>
                    <div class="col-1-of-2">
                        <img class="product__text-image__image" src="{{ asset('img/nozzle.png') }}"
                            alt=" {{ __('products/rb7.motorAlt') }}">
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
                                    <h3>{{ __('products/pk1.technicalData') }}</h3>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <tr>
                                <td class="text-left">{{ __('products/pk1.data1') }}</td>
                                <td class="text-left">800 mm</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/pk1.data2') }}</td>
                                <td class="text-left">800 mm</td>
                            </tr>
                            <tr>
                                <td class="text-left">{{ __('products/pk1.data3') }}</td>
                                <td class="text-left">900 mm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-1-of-2 product__dimensions">
                    <img class="product__dimensions__image" src="{{ asset('img/pk1.png') }}" alt="">
                </div>
            </div>
        </section>

        <section class="product__recommend d-flex flex-center">
            <div class="row">
                <div class="col-1-of-2">
                    <article class="about__text paragraph trigger side-line--fade">
                        <h2 class="heading-2 mt-2">{{ __('products/pk1.recommendHeading') }}</h2>
                        <p>
                            {{ __('products/pk1.recommendProductDescription') }}
                        </p>
                        <a class="mt-2 btn btn--filled" href="rb11">{{ __('products/pk1.learnMore') }}</a>
                        </p>
                    </article>
                </div>
                <div class="col-1-of-2">
                    <img class="product__recommend__image" src="{{ asset('img/rb11.png') }}"
                        alt="{{ __('products/pk1.recommendAlt') }}">
                </div>
            </div>
        </section>
    </main>

    @include('layout/footer')
</body>
