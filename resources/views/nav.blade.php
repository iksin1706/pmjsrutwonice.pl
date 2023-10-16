<nav class="nav">
    <a href="/"><img class="nav__logo" src="{{ asset('img/logo.png') }}" alt=""></a>
    <ul class="nav__list">
        <li class="nav__dropdown-trigger">
            <a href="..#products">Produkty &dtrif;</a>
            <ul class="nav__dropdown">
                <li><a href="rb11.html"><img src="images/render.png" alt=""> Śrutownica RB11</a></li>
                <li><a href="rb7.html"><img src="images/rb77.png" alt=""> Śrutownica RB7</a></li>
                <li><a href="pf90.html"><img src="images/filtr.png" alt=""> Odpylacz PF90</a></li>
                <li><a href="pk1.html"><img src="images/pk1.png" alt=""> Piaskarka PK1</a></li>
                <li><a href="oc100.html"><img src="images/filtr2.png" alt="">Pozostałe</a></li>
            </ul>
        </li>
        <li><a href="..#about">O nas</a></li>
        <li><a href="..#contact">Kontakt</a></li>
        <li><a href="faq.html">FAQ</a></li>
    </ul>

    <div class="nav--mobile">
        <input type="checkbox" class="nav--mobile__checkbox" id="navi-toggle">
        <label for="navi-toggle" class="nav--mobile__button">
            <span class="nav--mobile__label">Menu</span>
            <span class="nav--mobile__icon"></span>
        </label>

        <div class="nav--mobile__background">
            &nbsp;
        </div>
        <div class="nav--mobile__nav">
            <ul class="nav--mobile__list">
                <li class="nav--mobile__item"><a href="#" class="nav--mobile__link">Strona główna</a></li>
                <li class="nav--mobile__item"><a href="#about" class="nav--mobile__link">O nas</a></li>
                <li class="nav--mobile__item"><a href="#products" class="nav--mobile__link">Nasze produkty</a></li>
                <li class="nav--mobile__item"><a href="#contact" class="nav--mobile__link">Kontakt</a></li>
                <li class="nav--mobile__item"><a href="faq.html" class="nav--mobile__link">FAQ</a></li>
            </ul>
        </div>
    </div>
    <div class="nav__languages d-flex">
        <img src="{{ asset('img/poland.png') }}" alt="" class="nav__language">
        <img src="{{ asset('img/eng.png') }}" alt="" class="nav__language">
    </div>
</nav>
