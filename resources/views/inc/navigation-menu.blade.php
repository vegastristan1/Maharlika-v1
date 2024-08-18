<nav class="navbar navbar-expand-lg c-nav-bar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img class="c-brand-logo" src="{{ asset('images/cbi-inc.png') }}"
                alt="Commando Brotherhood International Inc. Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a class="navbar-brand" href="#">
                    <img class="c-brand-logo" src="{{ asset('images/cbi-inc.png') }}"
                        alt="Commando Brotherhood International Inc. Logo">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link c-nav-menu-item" href="#">Mission & Vision</a>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <a class="nav-link c-nav-menu-item" aria-current="page" href="#">About Us</a>
                    </li>
                    <div class="btn btn-c-nav-menu c-nav-menu-item">Login</div>
                </ul>
            </div>
        </div>
    </div>
</nav>
