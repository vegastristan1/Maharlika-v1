<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Maharlika') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('inc.navigation-menu')
        <section id="hero" class="hero-banner">
            @include('inc.banner')
        </section>

        <main class="">
            <!-- Section for About -->
            <section id="about" class="about-section bg-about-us">
                <div class="container">
                    <div class="section-content-title">
                        <div class="addition-break-15vh">
                        </div>
                        <h2 class="section-title">About Us</h2>
                        <p class="section-description pb-3 text-center">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Architecto
                            blanditiis officiis laudantium consectetur <br> perspiciatis non unde, numquam neque tenetur
                            corporis tempore asperiores ab, commodi voluptatibus nesciunt quia enim suscipit maiores.
                        </p>
                        <div class="addition-break-5vh">
                        </div>
                    </div>

                    @include('inc.mission')
                    @include('inc.vision')
                    @include('inc.value')
                </div>
            </section>

            <div class="addition-break-15vh">
            </div>
            <!-- Section for Footer -->
            <footer id="footer" class="footer-section">
                @include('inc.footer')
            </footer>
        </main>
    </div>
</body>


</html>
