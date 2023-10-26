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

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/product.js'])

</head>

<body>

    @include('nav')
    <main class="product">
        <section class="section product__hero"
            style="background-image: linear-gradient(#ffffff00 50%,rgb(0, 0, 0)), url('{{ asset('img/rb11.jpg') }}')">
            {{-- <h1 class="product__hero__heading">RB11</h1> --}}
            <div class="product__hero__stats \">
                <div class="product__hero__stats__item d-flex
                color-white flex-center">
                <h5>11kW</h5>
                <p>Moc silnika</p>
            </div>
            <div class="product__hero__stats__item d-flex color-white flex-center">
                <h5>4 min</h5>
                <p>Średni czas pracy</p>
            </div>
            <div class="product__hero__stats__item d-flex color-white flex-center">
                <h5>100%</h5>
                <p>Zadowolenia</p>
            </div>
            </div>
        </section>
        <section class="section product__about ">
            <div class="product__about__wrapper d-flex flex-center">
                <article class="product__about__text" data-aos="fade-up" data-aos-offset="300">
                    <p class="color-white">
                        Śrutownica RB11 jest urządzeniem, które automatyzuje - a co za tym idzie znacznie ułatwia proces
                        obróbki
                        strumieniowo-ściernej. Wbrew stereotypom poprzez śrutowanie nie uzyskujemy dużo bardziej
                        chropowatej
                        powierzchni, niż podczas procesu piaskowania. Śrutowanie śrutem o symbolu S110 odpowiada
                        piaskowaniu
                        przy użyciu poligritu o gradacji 0,2-1.2 przy ciśnieniu 7 bar, co pozwala na feldze aluminiowej
                        uzyskać
                        powierzchnie o chropowatości 28um-35um, co zapewnia bardzo dobra przyczepność, na przykład dla
                        farb
                        proszkowych, przy czym nie ma problemu z wyrównaniem felgi warstwą podkładową.
                    </p>
                </article>
            </div>
        </section>
        <section class="swiper-section">
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
        </section>
        <section class="section product__usages">
            <div class="w-100">
                <h2 class="heading-2 text--center mb-2"> Zastosowania naszego produktu</h2>
                <div class="row">
                    <div class="col-1-of-3">
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="200"
                            data-aos-offset="300">
                            <img src="{{ asset('img/icons/rim-icon.svg') }}" class="product__usages__item__icon">
                            <h4 class="product__usages__item__header">Felgi</h4>
                            <p class="product__usages__item__text">
                                Nasz produkt najczęściej znajduje zastosowanie w oczyszczaniu felg stalowych i
                                aluminiowych.
                            </p>
                        </div>
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="300">
                            <img src="{{ asset('img/icons/brakes-icon.svg') }}" class="product__usages__item__icon">

                            <h4 class="product__usages__item__header">Zaciski hamulcowe</h4>
                            <p class="product__usages__item__text">
                                Dzięki pojemnemu koszowi możesz oczyszczyść nawet do 30 kompletów podczas jednego
                                śrutowania.
                            </p>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <img class="product__usages__image" src="{{ asset('img/RB11.png') }}" alt=""
                            data-aos="fade-up">
                    </div>
                    <div class="col-1-of-3">
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="300"
                            data-aos-offset="300">
                            <img src="{{ asset('img/icons/turbo-icon.svg') }}" class="product__usages__item__icon">

                            <h4 class="product__usages__item__header">Turbiny samochodowe</h4>
                            <p class="product__usages__item__text">
                                Śrutownica również idealnie sprawdza sie w czysczeniu turbin znacznie przyśpieszając
                                i
                                ułatwiając proces
                            </p>
                        </div>
                        <div class="product__usages__item d-flex numbers" data-aos="fade-up" data-aos-delay="500">
                            <img src="{{ asset('img/icons/starter-icon.svg') }}" class="product__usages__item__icon">

                            <h4 class="product__usages__item__header">Inne</h4>
                            <p class="product__usages__item__text">
                                Dzięki kilku różnym sposobom mocowania oraz falownikowi dzięki któremu dostosujesz
                                siłe
                                śrutowania możesz wyczyścić wiele innych różnych elementów
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section product__modes">
            <div class="heading-2 side-line mb-2">
                3 Tryby pracy
            </div>

            <div class="cards__wrapper row">
                <div class="col-1-of-3">
                    <div class="card card--1 m-1 " data-aos="fade-up">
                        <img class="card__image" src="{{ asset('img/rollers.png') }}" alt="">
                        <p class="card__paragraph text-left">W tym trybie felga umieszczana jest na rolkach które
                            wprawiają felge w ruch obrotowy dzięki czemu możliwe jest szybkie i dokładne
                            oczyszczenie felgi</p>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card card--2 m-1 data-aos="fade-up" data-aos-delay="100">
                        <img class="card__image" src="{{ asset('img/zaw.png') }}" alt="">
                        <p class="card__paragraph text-left" style="text-align: justify;">
                            Jeżeli potrzebujesz wyczyścić felge jeszcze dokładniej niż w przypadku rolek możesz
                            zamocować ją na
                            na specjalnej zawieszce, która jednocześnie krążąc po orbicie, obraca się wokół własnej
                            osi, co pozwala
                            na usuniecie farby z najtrudniej dostępnych miejsc.
                        </p>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card card--3 m-1 " data-aos="fade-up" data-aos-delay="200">

                        <img class="card__image" src="{{ asset('img/kosz.png') }}" alt="">
                        <p class="card__paragraph text-left">
                            W koszu umieszczane są wszystkie elementy których nie da sie umieścić na rolkach np
                            zaciski hamulcowe. Dzięki dużej pojemności możesz w krótkim czasie wyczyścić nawet
                            kilknaście elementów naraz
                        </p>
                    </div>
                </div>
            </div>
            <h5 class="heading-3 text--center color-white mt-3">
                <span class="underlined">
                    Żaden z trybów nie wymaga sprężonego powietrza!
                </span>
            </h5>
        </section>


        <section class="section product__info pb-3">
            <div class="product__text-image product__text-image--left d-flex flex-center pt-3 pb-3">
                <div class="product__text-image__wrapper d-flex flex-center w-100" data-aos="fade-right"
                    data-aos-delay="0" data-aos-offset="300">

                    <article class="product__text-image__text side-line--fade">
                        <div class="product__about__heading">
                            <h2 class="heading-2 color-white">11 kW silnik z falownikiem</h2>
                        </div>
                        <p class="color-white">
                            Dzięki zastosowaniu zaawansowanego falownika możesz precyzyjnie kontrolować prędkość
                            i moc śrutownicy, co pozwala na doskonałe dostosowanie jej do różnych zadań. Bez względu
                            na
                            przedmiot który który chcesz wyśrutować możesz zrobić to bezpiecznie i efektywnie,
                            nieważne
                            czy będzie delikatna osłona z cienkiej blachy czy felga z trudno usuwalnym lakierem.
                        </p>
                    </article>
                    <img class="product__text-image__image clamp" src="{{ asset('img/silnik.png') }}"
                        alt="">
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
                                <h2 class="heading-2 color-white">Intuicyjne sterowanie</h2>
                            </div>
                            <p class="color-white">
                                Dzięki ekranowi dotykowemu możesz łatwo i szybko dostosować parametry pracy śrutownicy
                                do
                                swoich potrzeb. Intuicyjny interfejs sprawia że z obsługą poradzi sobie nawet dziecko.
                            </p>
                        </article>
                    </div>

                </div>
            </div>
        </section>
        <section class="section product__technical-data pb-3">

            <table class="table-fill mb-3">
                <thead>
                    <tr>
                        <th class="text-left" colspan="2">
                            <h3>Dane techniczne</h3>
                        </th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td class="text-left">Wysokość</td>
                        <td class="text-left">208 cm</td>
                    </tr>
                    <tr>
                        <td class="text-left">Szerokość</td>
                        <td class="text-left">140 cm</td>
                    </tr>
                    <tr>
                        <td class="text-left">Głębokość</td>
                        <td class="text-left">130 cm</td>
                    </tr>
                    <tr>
                        <td class="text-left">Waga</td>
                        <td class="text-left">950 kg</td>
                    </tr>
                    <tr>
                        <td class="text-left">Moc</td>
                        <td class="text-left">11 kW</td>
                    </tr>
                </tbody>
            </table>
            <img class="product__dimensions" src="{{ asset('img/dim.png') }}" alt="">
        </section>

        <section class="product__video d-flex flex-center p-3 background--dark--gradient">
            <h2 class="heading-2">Zobacz film prezentujący działanie śrutownicy PMJ RB11</h2>
            <iframe class="product__video__box" width="1200" height="600"
                src="https://www.youtube.com/embed/4O6l8ObJY2I?si=fZ7rDDWu0hVEavrt" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

        </section>

        <section class="product__recommend d-flex flex-center">
            <div class="row">
                <div class="col-1-of-2">
                    <article class="about__text paragraph trigger side-line--fade">
                        <h2 class="heading-2">Polecamy również</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolorum vero recusandae
                            maxime maiores sequi ducimus eos non, adipisci odit doloribus aspernatur pariatur iusto
                            repellat perspiciatis, quis nobis at asperiores!
                        </p>
                        <a class="mt-2 btn btn--filled" href="pf90.html">Dowiedz się więcej</a>
                        </p>
                    </article>
                </div>
                <div class="col-1-of-2">
                    <img class="about__image" src="{{ asset('img/pf90.png') }}" alt="">
                </div>
            </div>
        </section>
    </main>

    @include('footer')
</body>
