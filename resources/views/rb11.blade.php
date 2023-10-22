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

    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

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
        <section class="w-100 flex-center d-flex gallery__container">
            <div class="gallery section" data-aos="fade-up" data-aos-offset="300">
                <div class="gallery__item">
                    <input type="radio" id="img-1" checked name="gallery" class="gallery__selector" />
                    <label for="img-1" class="gallery__thumb"><img src="images/rbbg.png" alt="" /></label>
                </div>
                <div class="gallery__item">
                    <input type="radio" id="img-2" name="gallery" class="gallery__selector" />
                    <label for="img-2" class="gallery__thumb"><img src="images/weld.jpg" alt="" /></label>
                </div>
                <div class="gallery__item">
                    <input type="radio" id="img-3" name="gallery" class="gallery__selector" />
                    <label for="img-3" class="gallery__thumb"><img src="images/render.png" alt="" /></label>
                </div>
                <div class="gallery__item">
                    <input type="radio" id="img-4" name="gallery" class="gallery__selector" />
                    <label for="img-4" class="gallery__thumb"><img src="images/rb7.png" alt="" /></label>
                </div>
            </div>

        </section>
        <section class="section product__usages">
            <div class="w-100">
                <h2 class="heading-2 text--center mb-2"> Zastosowania naszego produktu</h2>
                <div class="d-flex flex-sb">
                    <div>
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
                    <img src="{{ asset('img/RB11.png') }}" alt="" data-aos="fade-up">
                    <div>
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

            <div class="cards__wrapper d-flex flex-sb">
                <div class="card" data-aos="fade-up">
                    <img class="card__image" src="{{asset('img/rollers.png')}}" alt="">
                    <p class="card__paragraph text-left">W tym trybie felga umieszczana jest na rolkach które
                        wprawiają felge w ruch obrotowy dzięki czemu możliwe jest szybkie i dokładne
                        oczyszczenie felgi</p>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img class="card__image" src="{{asset('img/zaw.png')}}" alt="">
                    <p class="card__paragraph text-left" style="text-align: justify;">
                        Jeżeli potrzebujesz wyczyścić felge jeszcze dokładniej niż w przypadku rolek możesz
                        zamocować ją na
                        na specjalnej zawieszce, która jednocześnie krążąc po orbicie, obraca się wokół własnej
                        osi, co pozwala
                        na usuniecie farby z najtrudniej dostępnych miejsc.
                    </p>
                </div>
                <div class="card" data-aos="fade-up" data-aos-delay="200">

                    <img class="card__image" src="{{asset('img/kosz.png')}}" alt="">
                    <p class="card__paragraph text-left">
                        W koszu umieszczane są wszystkie elementy których nie da sie umieścić na rolkach np
                        zaciski hamulcowe. Dzięki dużej pojemności możesz w krótkim czasie wyczyścić nawet
                        kilknaście elementów naraz
                    </p>
                </div>
            </div>
            <h5 class="heading-3 text--center color-white mt-3">
                <span class="underlined">
                    Żaden z trybów nie wymaga sprężonego powietrza!
                </span>
            </h5>
        </section>


        <section class="product__info mb-3 pb-3">
            <div class="product__about product__about--left  d-flex flex-sa p-3 ">
                <div class="product__about__wrapper d-flex flex-center p-2" data-aos="fade-right" data-aos-delay="0"
                    data-aos-offset="300">

                    <article class="product__about__text side-line--fade">
                        <div class="product__about__heading">
                            <h2 class="heading-2 color-white">11 kW silnik z falownikiem</h2>
                        </div>
                        <p class="color-white mr-3">
                            Dzięki zastosowaniu zaawansowanego falownika możesz precyzyjnie kontrolować prędkość
                            i moc śrutownicy, co pozwala na doskonałe dostosowanie jej do różnych zadań. Bez względu
                            na
                            przedmiot który który chcesz wyśrutować możesz zrobić to bezpiecznie i efektywnie,
                            nieważne
                            czy będzie delikatna osłona z cienkiej blachy czy felga z trudno usuwalnym lakierem.
                        </p>
                    </article>
                    <img class="product__about__image" src="images/silnik.png" alt="">
                </div>
            </div>
            <div class="product__about product__about--right  d-flex flex-sa p-3 mt-1">
                <div class="product__about__wrapper d-flex flex-center" data-aos="fade-left" data-aos-delay="0"
                    data-aos-offset="300">
                    <img class="product__about__image" src="images/pan.png" alt="">
                    <article class="product__about__text side-line--fade--right">
                        <div class="product__about__heading">
                            <h2 class="heading-2 color-white text-right">Intuicyjne sterowanie</h2>
                        </div>
                        <p class="color-white text-right ml-3">
                            Dzięki ekranowi dotykowemu możesz łatwo i szybko dostosować parametry pracy śrutownicy
                            do
                            swoich potrzeb. Intuicyjny interfejs sprawia że z obsługą poradzi sobie nawet dziecko.
                        </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="d-flex flex-center m-3">

            <table class="table-fill mb-3">
                <thead>
                    <tr>
                        <th class="text-left" colspan="2">Dane techniczne</th>
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
            <img class="product__dimensions pl-3" src="images/dim.png" alt="">
        </section>

        <section class="product__video d-flex flex-center p-3">
            <iframe class="product__video__box" width="1200" height="600"
                src="https://www.youtube.com/embed/4O6l8ObJY2I?si=fZ7rDDWu0hVEavrt" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>

        </section>

        <section class="product__form d-flex flex-center">
            <div class=" d-flex flex-center ">
                <article class="about__text text-animated trigger side-line--fade">
                    <h2 class="heading-2 ">Polecamy również</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque dolorum vero recusandae
                        maxime maiores sequi ducimus eos non, adipisci odit doloribus aspernatur pariatur iusto
                        repellat perspiciatis, quis nobis at asperiores!
                    </p>
                    <a class="mt-2 btn btn--filled" href="pf90.html">Dowiedz się więcej</a>
                    </p>
                </article>
                <img class="about__image" src="images/filtr.png" alt="">
            </div>
        </section>
    </main>

    @include('footer')
</body>
