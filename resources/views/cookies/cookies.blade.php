<div id="cookie-popup" class="p-2 d-flex flex-sb">
    <p class="paragraph">{{ __('cookies.text') }} <a class="link" href="/policy">{{ __('cookies.policy') }}</a>
    </p>
    <div class="">
        <a id="accept-cookies" class="btn btn--empty">{{ __('cookies.accept') }}</a>
        <a id="decline-cookies" class="btn btn--text"> {{ __('cookies.decline') }}</a>
    </div>
</div>

<script defer>
    const userHasAcceptedCookies = localStorage.getItem('cookie-consent-accepted');
    document.querySelector('#accept-cookies').addEventListener('click', acceptCookies);

    function displayCookiePopup() {
        document.getElementById('cookie-popup').style.display = 'flex';
    }

    function acceptCookies() {
        document.getElementById('cookie-popup').style.display = 'none';
        localStorage.setItem('cookie-consent-accepted', 'true');
        if (typeof gtag === 'function') {
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'G-S0N1NN596J');
        }
    }

    if (!userHasAcceptedCookies) displayCookiePopup();
</script>
