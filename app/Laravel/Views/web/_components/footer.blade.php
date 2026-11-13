
<footer class="site-footer">
    <div class="container">
        <div class="row gy-4 align-items-start">

            <div class="col-lg-5">
                <a href="{{ route('web.home') }}" class="footer-brand">
                    AMS<span>.</span>
                </a>

                <p class="footer-description mt-3">
                    lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut laoreet tincidunt, nunc nisl aliquam nunc, eget aliquam nisl nunc eget nunc.
                </p>
            </div>

            <div class="col-6 col-lg-3">
                <h6 class="footer-heading">EXPLORE</h6>

                <ul class="footer-links">
                    <li><a href="{{ route('web.home') }}" @if (request()->routeIs('web.home')) aria-current="page" @endif>Home</a></li>
                    <li><a href="{{ route('web.articles') }}" @if (request()->routeIs('web.articles')) aria-current="page" @endif>Articles</a></li>
                    <li><a href="{{ route('web.about') }}" @if (request()->routeIs('web.about')) aria-current="page" @endif>About Us</a></li>
                    <li><a href="{{ route('web.contact') }}" @if (request()->routeIs('web.contact')) aria-current="page" @endif>Contact</a></li>
                </ul>
            </div>

            <div class="col-6 col-lg-4">
                <h6 class="footer-heading">Lorem Ipsum</h6>

                <p class="footer-description">
                    lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc ut laoreet tincidunt, nunc nisl aliquam nunc, eget aliquam nisl nunc eget nunc.
                </p>
            </div>

        </div>

        <hr class="footer-divider">

        <div class="d-flex flex-column flex-md-row
                    justify-content-between gap-2">
            <p class="copyright mb-0">
                &copy; {{ date('Y') }} Article and Media Site.
                All rights reserved.
            </p>

            <p class="copyright mb-0">
                Timothy Lance T. Dela Cruz
            </p>
        </div>
    </div>
</footer>
