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
            <!-- Section for About -->
            <section id="about" class="about-section bg-about">
                <div class="container">
                    <h2>About Us</h2>
                    <p>Content about your organization goes here.</p>
                </div>
            </section>

            <!-- Section for Services -->
            <section id="services" class="services-section bg-image">
                <div class="container">
                    <h2>Our Services</h2>
                    <p>Details about the services offered.</p>
                </div>
            </section>

            <!-- Section for Contact -->
            <section id="contact" class="contact-section bg-mission">
                <div class="container">
                    <h2>Contact Us</h2>
                    <p>Information on how to contact you.</p>
                    <form>
                        <!-- Your contact form elements -->
                    </form>
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
