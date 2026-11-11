<nav class="navbar navbar-expand-lg site-navbar sticky-top">
    <div class="container">

        <a class="navbar-brand site-brand"
           href="{{ route('web.home') }}">
            AMS<span>.</span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
             id="mainNavbar">

            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.home') ? 'active' : '' }}"
                        @if (request()->routeIs('web.home')) aria-current="page" @endif
                       href="{{ route('web.home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.articles', 'web.article') ? 'active' : '' }}"
                        @if (request()->routeIs('web.articles')) aria-current="page" @endif
                       href="{{ route('web.articles') }}">
                        Articles
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.about') ? 'active' : '' }}"
                        @if (request()->routeIs('web.about')) aria-current="page" @endif
                       href="{{ route('web.about') }}">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('web.contact') ? 'active' : '' }}"
                        @if (request()->routeIs('web.contact')) aria-current="page" @endif
                       href="{{ route('web.contact') }}">
                        Contact
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>
