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

    @vite(['resources/scss/app.scss', 'resources/scss/pages/home.scss', 'resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('nav')

    <section class="section hero">
        <video autoplay muted loop id="myVideo" class="bg-video">
            <source src="videos/background.m4v" type="video/mp4">
            Video couldn't be loaded
        </video>
        <div class="bg-video__gradient"></div>
        <div class="bg-video__content">
            <header class="hero__header side-line ml-3">
                <h1 class="header-with-roller">Z naszymi produktami zregenerujesz
                    <div class="roller">
                        <span class="roller__rolltext">Felgi<br />
                            Zaciski<br />
                            Turbiny<br />
                            <span class="roller__last">i wiele innych ...</span><br />
                    </div>
                </h1>
                <div class="btn-wrapper">
                    <a href="/produkty" class="btn btn--empty">Nasze produkty</a>
                    <a href="/o-nas" class="btn btn-text btn-text--animated">O nas</a>
                </div>
            </header>
        </div>
        <div class="scroll-down-animation">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>



    @include('footer')
</body>

</html>