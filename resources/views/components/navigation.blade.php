<nav class="nav {{ $fontClass }}">
    <a href="/"><img class="nav__logo" src="{{ asset('img/logo.png') }}" alt="{{ __('nav.logoAlt') }}"
            aria-label="To Home Page"></a>
    <ul class="nav__list">
        <li class="nav__dropdown-trigger">
            <a href="..#products">{{ __('nav.products') }} &dtrif;</a>
            <ul class="nav__dropdown">
                <li><a href="rb11"><img src="{{ asset('img/RB11.png') }}" alt="{{ __('nav.rb') }}">
                        {{ __('nav.rb') }} RB11</a></li>
                <li><a href="rb7"><img src="{{ asset('img/RB7.png') }}" alt="{{ __('nav.rb') }}">
                        {{ __('nav.rb') }} RB7</a></li>
                <li><a href="pf90"><img src="{{ asset('img/PF90.png') }}" alt=""{{ __('nav.pf') }}>
                        {{ __('nav.pf') }} PF90</a></li>
                <li><a href="pk1"><img src="{{ asset('img/PK1.png') }}" alt="{{ __('nav.pk') }}">
                        {{ __('nav.pk') }} PK1</a></li>
                <li><a href="oc100"><img src="{{ asset('img/RB11.png') }}"
                            alt="{{ __('nav.other') }}">{{ __('nav.other') }}</a></li>

            </ul>
        </li>
        <li><a href="..#about">{{ __('nav.about') }}</a></li>
        <li><a href="..#contact">{{ __('nav.contact') }}</a></li>
        <li><a href="order">{{ __('nav.order') }}</a></li>
        <li><a href="faq">{{ __('nav.faq') }}</a></li>
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
                    {{ __('nav.products') }}
                    <ul class="nav__dropdown nav__dropdown--mobile">
                        <li><a href="rb11"><img src="{{ asset('img/RB11.png') }}" alt="">
                                {{ __('nav.rb') }}
                                RB11</a></li>
                        <li><a href="rb7"><img src="{{ asset('img/RB7.png') }}" alt="">
                                {{ __('nav.rb') }}
                                RB7</a></li>
                        <li><a href="pf90"><img src="{{ asset('img/PF90.png') }}" alt="">
                                {{ __('nav.pf') }}
                                PF90</a></li>
                        <li><a href="pk1"><img src="{{ asset('img/PK1.png') }}" alt="">
                                {{ __('nav.pk') }}
                                PK1</a></li>
                        <li><a href="oc100"><img src="{{ asset('img/RB11.png') }}"
                                    alt="">{{ __('nav.other') }}</a>
                        </li>
                    </ul>
                </li>

                <li class="nav--mobile__item"><a href="/#contact" class="nav--mobile__link">{{ __('nav.contact') }}</a>
                </li>

                <li class="nav--mobile__item"><a href="order" class="nav--mobile__link">{{ __('nav.order') }}</a>
                </li>
                <li class="nav--mobile__item"><a href="faq" class="nav--mobile__link">{{ __('nav.faq') }}</a></li>
                <li class="nav--mobile__item nav--mobile__item--products">
                    {{ __('nav.languages') }}
                    <ul class="nav__dropdown nav__dropdown--mobile">
                        @foreach ($available_locales as $localeCode => $localeName)
                            <li><a href="/{{ $localeCode }}">{{ $localeName }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="nav__dropdown-trigger nav__languages">
        <i class="fa fa-globe" aria-label="{{ __('nav.languages') }}"></i>
        <ul class="nav__languages__dropdown ">
            @foreach ($available_locales as $localeCode => $localeName)
                <li><a href="/{{ $localeCode }}">{{ $localeName }}</a></li>
            @endforeach
        </ul>
    </div>
</nav>
