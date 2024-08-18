<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
            <!-- Section for Services -->
            <section id="mission-vision" class="mission-vision-section bg-mission-vision">
                <div class="container">
                    <div class="section-content-title">
                        <div class="addition-break">
                        </div>
                        <h2 class="">Our Mission & Vision</h2>
                        <p class="pb-3 text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque ipsa
                            inventore
                            alias vel? Officia, necessitatibus asperiores repellat voluptatibus error vel quaerat nobis
                            nisi ipsum! Rerum minima id cupiditate tempore facilis.</p>
                    </div>

                    @include('inc.mission')
                    @include('inc.vision')
                </div>

                <div class="addition-break">
                </div>
            </section>

            <!-- Section for About -->
            <section id="about" class="about-section bg-about-us">
                <div class="container">
                    <div class="section-content-title">
                        <div class="addition-break">
                        </div>
                        <h2>About Us</h2>
                        <p class="pb-3 text-center">Content about your organization goes here.</p>
                    </div>
                </div>
            </section>

            <!-- Section for Footer -->
            <footer id="footer" class="footer-section">
                <div class="container">
                    <p>&copy; 2024 Your Company. All rights reserved.</p>
                </div>
            </footer>
        </main>
    </div>
</body>


</html>
