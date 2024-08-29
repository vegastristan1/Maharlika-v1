<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Maharlika') }}</title>

    <!-- Primary Meta Tags -->
    <meta name="title" content="Maharlika" />
    <meta name="description"
        content="is a non-profit and dynamic organization dedicated to fostering community development and empowering its members. Our mission is to create a supportive and collaborative environment where members assist each other, driving collective progress towards our shared goals." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://maharlika-v1.vercel.app/" />
    <meta property="og:title" content="Maharlika" />
    <meta property="og:description"
        content="is a non-profit and dynamic organization dedicated to fostering community development and empowering its members. Our mission is to create a supportive and collaborative environment where members assist each other, driving collective progress towards our shared goals." />
    <meta property="og:image" content="{{ asset('images/hero-image-1.png') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://maharlika-v1.vercel.app/" />
    <meta property="twitter:title" content="Maharlika" />
    <meta property="twitter:description"
        content="is a non-profit and dynamic organization dedicated to fostering community development and empowering its members. Our mission is to create a supportive and collaborative environment where members assist each other, driving collective progress towards our shared goals." />
    <meta property="twitter:image" content="{{ asset('images/hero-image-1.png') }}" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <script>
        window.addEventListener('load', () => {
            window.scrollTo(0, 0); // Ensure the page starts at the top
        });
    </script>


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
                        {{-- <p class="section-description pb-3 text-center">Lorem ipsum dolor sit amet consectetur,
                            adipisicing elit. Architecto
                            blanditiis officiis laudantium consectetur <br> perspiciatis non unde, numquam neque tenetur
                            corporis tempore asperiores ab, commodi voluptatibus nesciunt quia enim suscipit maiores.
                        </p> --}}
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
