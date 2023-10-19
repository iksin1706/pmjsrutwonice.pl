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
                <img class="about__description__image clamp" src="{{ asset('img/logo2.png') }}" alt="Logo of Company">
            </section>
            <section class="section company-info background--dark--gradient pt-3 pb-3">
                <div class="row flex-sa">
                    <div class="europe clamp">
                        <img class="europe__image" loading="lazy" src="{{ asset('img/europe.svg') }}"
                            alt="Map of Europe">
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
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,25,28.2" />
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
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,25,28.2" />
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
                                                d="M750.2,668.9c-10.8-82.4-55.1-295.7-249.3-461.9C316.2,48.9,108.3,29.8,25,28.2" />
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
                    <div class="company-info__stats trigger clamp">
                        <div class="stats trigger">
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
            <section class="pb-3">
                <h2 class="heading-2 mt-3 mb-2 text--center w-100" id="products">Odkryj naszą oferte</h2>
                </p>
                <div class="slider trigger animation-finished pb-3">
                    <div class="slide">
                        <div class="slide__image-container">
                            <img class="slide__image " src="{{ asset('img/rb11.JPG') }}" alt="">
                        </div>
                        <h3 class="slide__preview">Śrutownice</h3>
                        <div class="slide__text">
                            <h3>Śrutownice</h3>
                            <p>Nasze flagowe produkty, idealna alternatywa dla piaskarek</p>

                        </div>
                        <a class="slide__btn btn btn--filled"
                            onclick="document.querySelector('.pop-up').classList.add('pop-up--active')">Zobacz
                            oferte</a>
                    </div>
                    <div class="slide">
                        <div class="slide__image-container">
                            <img class="slide__image" src="{{ asset('img/rb11.JPG') }}" alt="">
                        </div>
                        <h3 class="slide__preview">Piaskarki</h3>
                        <div class="slide__text">
                            <h3>Piaskarki</h3>
                            <p>Oprócz śrutownic mamy dostępne również tradycyjne piaskarki</p>
                        </div>
                        <a class="slide__btn btn btn--filled">Zobacz oferte</a>
                    </div>
                    <div class="slide">
                        <div class="slide__image-container">
                            <img class="slide__image" src="{{ asset('img/rb11.JPG') }}" alt="">
                        </div>
                        <h3 class="slide__preview">Napylarki</h3>
                        <div class="slide__text">
                            <h3>Napylarki</h3>
                            <p>Innowacyjne urządzenie do uzupełniania braków np w felgach</p>
                        </div>
                        <a class="slide__btn btn btn--filled">Zobacz oferte</a>
                    </div>
                    <div class="slide">
                        <div class=" slide__image-container">
                            <img class="slide__image" src="{{ asset('img/rb11.JPG') }}" alt="">
                        </div>
                        <h3 class="slide__preview">Piece</h3>
                        <div class="slide__text">
                            <h3>Piece</h3>
                            <p>Elektryczne piece do malowania proszkowego</p>
                        </div>
                        <a class="slide__btn btn btn--filled">Zobacz oferte</a>
                    </div>
                    <div class="slide">
                        <div class="slide__image-container">
                            <img class="slide__image" src="{{ asset('img/rb11.JPG') }}" alt="">
                        </div>
                        <h3 class="slide__preview">Kabiny</h3>
                        <div class="slide__text">
                            <h3>Kabiny do malowania</h3>
                            <p>Idealnie przystowane do malowania proszkowego kabiny</p>
                        </div>
                        <a class="slide__btn btn btn--filled">Zobacz oferte</a>
                    </div>
                </div>
            </section>
        </article>
        <section class="flagship section pt-4" style="background-image: url('{{ asset('img/background.jpg') }}');">
            <div class="row">
                <div class="flagship__text clamp ">
                    <h2 class="heading-2 color--black">Nasz flagowy produkt</h2>
                    <p class="paragraph mt-2 mb-2 color--black text--normal"><span>Śrutownica RB11 jest urządzeniem,
                            które automatyzuje - a co
                            za tym
                            idzie
                            znacznie ułatwia proces obróbki strumieniowo-ściernej. Wbrew stereotypom poprzez
                            śrutowanie
                            nie
                            uzyskujemy dużo bardziej chropowatej powierzchni, niż podczas procesu piaskowania.
                            Śrutowanie
                            śrutem o symbolu S110 odpowiada piaskowaniu przy użyciu poligritu o gradacji 0,2-1.2
                            przy
                            ciśnieniu 7 bar, co pozwala na feldze aluminiowej uzyskać powierzchnie o
                            chropowatości
                            28um-35um, co zapewnia bardzo dobra przyczepność,
                            na przykład dla farb proszkowych, przy czym nie ma problemu z wyrównaniem felgi
                            warstwą
                            podkładową.</span></p>
                    <div class="flagship__btn btn btn--filled">Dowiedz się więcej</div>
                </div>
                <img class="flagship__image clamp--smaller" src="{{ asset('img/rb1111.png') }}" alt="">
            </div>
            <div class="beforeafter">
                <h3 class="color--black">PRZED</h3>
                <h3 class="color--primary">PO</h3>
            </div>

            <div class="banner-container">
                <div id="banner-wrapper" class="banner-wrapper">
                    <div class="banner design">
                        <div class="banner-content">
                            <img src="{{ asset('img/normal2.png') }}" />
                        </div>
                    </div>
                    <div class="banner dev">
                        <div class="banner-content">
                            <img src="{{ asset('img/rust2.png') }}" />
                        </div>
                    </div>
                </div>
        </section>
        <section class="section contact pt-3 pb-3" id="contact">
            <h2 class="contact__label trigger text-center w-100">Jesteś zainteresowany? Zadzowń <span
                    class="underlined">726 120 051</span> </h2>

            <div class="row contact__container d-flex flex-sb">
                <div class="contact__left clamp">
                    <div class="contact__card ">
                        <div class="">
                            <ul class="contact__list">
                                <li>Mateusz Jasiński</li>
                                <li>biuro@pmjśrutownice.pl</li>
                                <li>726 120 051</li>
                                <li>Moderówka 322</li>
                            </ul>
                            <div class="social-media">
                                <a class="social-media__item">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="social-media__item">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="social-media__item">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact__right clamp">
                    <picture class="poland">
                        <source srcset="{{ asset('img/poland.svg') }}" media="(orientation: portrait)" />
                        <img src="{{ asset('img/poland.svg') }}" alt="">
                    </picture>
                </div>
            </div>
            <h2 class="contact__label text-center trigger">Masz pytanie? <span class="underlined "> Kilknij
                    tutaj</span> by przejść do FAQ</h2>
            <div class="contact__label">lub</div>
            <div class="write-to-us"
                style="background-image: linear-gradient(105deg, rgba(0, 0, 0, 0.9) 0%, rgba(0, 0, 0, 0.9) 50%, transparent 50%), url('{{ asset('img/contact-background.webp') }}')">
                <div class="write-to-us__form">
                    <form action="#" class="form" id="email-form">
                        @csrf
                        <h3 class="heading-2 mb-2">
                            Napisz do nas
                        </h3>
                        <div class="form__group">
                            <input id="recipient" name="recipient" type="email" class="form__input" placeholder="Email" required />
                            <label for="email" class="form__label">Email</label>
                        </div>

                        <div class="form__group">
                            <textarea id="messgae" name="message" rows="10" id="name" type="text-area" class="form__input area" placeholder="Treść" required></textarea>
                            <label for="name" class="form__label">Treść</label>
                        </div>

                        <div class="form-group">
                            <button class="email-send btn btn--filled">Wyślij &rarr;</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>
    @include('footer')

    <div class="email-popup" style="display: none">
        <div class="email-popup__container">
            <div class="email-popup__info">
                <div class="email-popup__loader">
                </div>
                <div class="email-popup__success">
                    <i class="fa fa-check"></i>
                </div>
            </div>
            <div class="email-popup__status text--center mt-1">Wysyłanie...</div>
        </div>

    </div>
</body>

</html>
