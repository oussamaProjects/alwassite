<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="#"> </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                        <i class="material-icons">search</i>
                        <div class="ripple-container"></div>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="material-icons">dashboard</i>
                        <p class="d-lg-none d-md-block">
                            {{ __('Stats') }}
                        </p>
                    </a>
                </li>

                @if (auth()->user()->notifications->count())
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification"> {{ auth()->user()->unreadnotifications->count() }}</span>
                            <p class="d-lg-none d-md-block">
                                {{ __('Some Actions') }} <sup
                                    class="btn btn-danger btn-sm rounded">{{ auth()->user()->readnotifications->count() }}</sup>
                                <sup class="btn btn-success btn-sm rounded">
                                    {{ auth()->user()->unreadnotifications->count() }}</sup>
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (auth()->user()->notifications as $notification)
                                @if ($notification->read_at)
                                    <a class="dropdown-item" href="#">
                                        <p class="text-danger">{{ var_dump($notification->data) }}</p>
                                    </a>
                                @else
                                    <a class="dropdown-item" href="#">
                                        <p class="text-success">{{ var_dump($notification->data) }}</p>
                                    </a>
                                @endif
                            @endforeach
                            @if (auth()->user()->unreadnotifications->count())
                                <a href="{{ route('markAsRead') }}"
                                    class="btn btn-default border border-success text-success">Mark as read.</a>
                            @endif

                            {{-- @foreach ($notifications as $notification)
                            <a class="dropdown-item" href="#">{{ $notification->name }}</a>
                        @endforeach --}}
                        </div>
                    </li>

                @endif


                <li class="nav-item dropdown">
                    <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">person</i>
                        <p class="d-lg-none d-md-block">
                            {{ __('Account') }}
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                        <a class="dropdown-item" href="#">{{ __('Settings') }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
