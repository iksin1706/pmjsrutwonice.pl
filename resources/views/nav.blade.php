<nav class="nav">
    <a href="/"><img class="nav__logo" src="{{ asset('img/logo.png') }}" alt="{{ __('nav.logoAlt') }}"
            aria-label="To Home Page"></a>
    <ul class="nav__list">
        <li class="nav__dropdown-trigger">
            <a href="..#products">{{ __('nav.products') }} &dtrif;</a>
            <ul class="nav__dropdown">
                <li><a href="rb11.html"><img src="{{ asset('img/RB11.png') }}" alt=""> Śrutownica RB11</a></li>
                <li><a href="rb7.html"><img src="{{ asset('img/RB7.png') }}" alt=""> Śrutownica RB7</a></li>
                <li><a href="pf90.html"><img src="{{ asset('img/PF90.png') }}" alt=""> Odpylacz PF90</a></li>
                <li><a href="pk1.html"><img src="{{ asset('img/PK1.png') }}" alt=""> Piaskarka PK1</a></li>
                <li><a href="oc100.html"><img src="{{ asset('img/RB11.png') }}" alt="">Pozostałe</a></li>
                
            </ul>
        </li>
        <li><a href="..#about">{{ __('nav.about') }}</a></li>
        <li><a href="..#contact">{{ __('nav.contact') }}</a></li>
        <li><a href="faq.html">{{ __('nav.faq') }}</a></li>
    </ul>

    <div class="nav--mobile">
        <input type="checkbox" class="nav--mobile__checkbox" id="navi-toggle">
        <label for="navi-toggle" class="nav--mobile__button">
            <span class="nav--mobile__label">Menu</span>
            <span class="nav--mobile__icon"></span>
        </label>
        <div class="nav--mobile__nav">
            <ul class="nav--mobile__list">
                <li class="nav--mobile__item"><a href="/#about" class="nav--mobile__link">O nas</a></li>
                <li class="nav--mobile__item nav--mobile__item--products">
                    Nasze produkty
                    <ul class="nav__dropdown nav__dropdown--mobile">
                        <li><a href="rb11.html"><img src="{{ asset('img/RB11.png') }}" alt=""> Śrutownica
                                RB11</a></li>
                        <li><a href="rb7.html"><img src="{{ asset('img/RB7.png') }}" alt=""> Śrutownica
                                RB7</a></li>
                        <li><a href="pf90.html"><img src="{{ asset('img/PF90.png') }}" alt=""> Odpylacz
                                PF90</a></li>
                        <li><a href="pk1.html"><img src="{{ asset('img/PK1.png') }}" alt=""> Piaskarka
                                PK1</a></li>
                        <li><a href="oc100.html"><img src="{{ asset('img/RB11.png') }}" alt="">Pozostałe</a>
                        </li>
                    </ul>
                </li>

                <li class="nav--mobile__item"><a href="#contact" class="nav--mobile__link">Kontakt</a></li>
                <li class="nav--mobile__item"><a href="faq.html" class="nav--mobile__link">FAQ</a></li>
                <ul class="nav__languages--mobile ">
                    <li><a href="/pl_pl">Polski</a></li>
                    <li><a href="/en_en">English</a></li>
                    <li><a href="/de_de">Deutsch</a></li>
                    <li><a href="/es_es">Español</a></li>
                </ul>
            </ul>
        </div>
    </div>
    <div class="nav__dropdown-trigger nav__languages">
        <i class="fa fa-globe"></i>
        <ul class="nav__languages__dropdown ">
            <li><a href="/pl_pl">Polski</a></li>
            <li><a href="/en_en">English</a></li>
            <li><a href="/de_de">Deutsch</a></li>
            <li><a href="/es_es">Español</a></li>
        </ul>
    </div>
</nav>
