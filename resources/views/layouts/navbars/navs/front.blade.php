<!-- Navbar -->
<nav id="myaccount-nav">

    <div class="myaccount-nav-content">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <p class="d-md-block">
                        {{ __('Home') }}
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('my-infos') }}">
                    <p class="d-md-block">
                        {{ __('My Account') }}
                    </p>
                </a>
            </li>

        </ul>
    </div>
</nav>
