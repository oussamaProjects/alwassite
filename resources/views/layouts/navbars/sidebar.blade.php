<div class="sidebar" data-color="azure" data-background-color="black"
    data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://127.0.0.1:8000/home" class="simple-text logo-normal">
            {{ __('Alwassite') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li
                class="nav-item {{ $activePage == 'blocs' || $activePage == 'cities' || $activePage == 'projects' || $activePage == 'properties' || $activePage == 'owners' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="true">
                    {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
                    <p>{{ __('Paramètres') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'blocs' || $activePage == 'cities' || $activePage == 'projects' || $activePage == 'properties' || $activePage == 'owners' ? ' show' : '' }}"
                    id="settings">
                    <ul class="nav">

                        <li class="nav-item{{ $activePage == 'categories' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('categories.index') }}">
                                <span class="sidebar-mini"> C </span>
                                <span class="sidebar-normal">{{ __('Categories') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'owners' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('owners.index') }}">
                                <span class="sidebar-mini"> O </span>
                                <span class="sidebar-normal">{{ __('Owners') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'cities' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('cities.index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal">{{ __('Cities') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'projects' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('projects.index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal">{{ __('Projetcs') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'blocs' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('blocs.index') }}">
                                <span class="sidebar-mini"> B </span>
                                <span class="sidebar-normal">{{ __('Blocs') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'properties' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('properties.index') }}">
                                <span class="sidebar-mini"> PR </span>
                                <span class="sidebar-normal">{{ __('Les propriétés') }} </span>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>



            <li class="nav-item {{ $activePage == 'payments' || $activePage == 'paymentsListe' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#listes" aria-expanded="true">
                    {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
                    <p>{{ __('Listes') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'payments' || $activePage == 'paymentsListe' ? ' show' : '' }}"
                    id="listes">
                    <ul class="nav">

                        <li class="nav-item{{ $activePage == 'payments' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('payments.index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal">{{ __('Payments') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'paymentsListe' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('payments.liste') }}">
                                <span class="sidebar-mini"> PL </span>
                                <span class="sidebar-normal">{{ __('Payments Liste') }} </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li
                class="nav-item {{ $activePage == 'claims' || $activePage == 'claimsTypes' || $activePage == 'claimsStatues' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#claims" aria-expanded="true">
                    {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
                    <p>{{ __('Claims') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'claims' || $activePage == 'claimsTypes' || $activePage == 'claimsStatues' ? ' show' : '' }}"
                    id="claims">
                    <ul class="nav">

                        <li class="nav-item{{ $activePage == 'claims' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('claims.index') }}">
                                <span class="sidebar-mini"> C </span>
                                <span class="sidebar-normal">{{ __('Claims') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'claimsTypes' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('claims_types.index') }}">
                                <span class="sidebar-mini"> CT </span>
                                <span class="sidebar-normal">{{ __('Claims types') }} </span>
                            </a>
                        </li>

                        <li class="nav-item{{ $activePage == 'claimsStatues' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('claims_statues.index') }}">
                                <span class="sidebar-mini"> CS </span>
                                <span class="sidebar-normal">{{ __('Claims Statues') }} </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>


            <li class="nav-item {{ $activePage == 'ads' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#ads" aria-expanded="true">
                    {{-- <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i> --}}
                    <p>{{ __('Ads') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'ads' ? ' show' : '' }}" id="ads">
                    <ul class="nav">

                        <li class="nav-item{{ $activePage == 'ads' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('ads.index') }}">
                                <span class="sidebar-mini"> C </span>
                                <span class="sidebar-normal">{{ __('Ads') }} </span>
                            </a>
                        </li>


                    </ul>
                </div>
            </li>


            {{-- <li class="nav-item {{ $activePage == 'profile' || $activePage == 'user-management' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
                    <p>{{ __('Laravel Examples') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <span class="sidebar-mini"> UP </span>
                                <span class="sidebar-normal">{{ __('User profile') }} </span>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> UM </span>
                                <span class="sidebar-normal"> {{ __('User Management') }} </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}


            {{-- <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('table') }}">
                    <i class="material-icons">content_paste</i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('typography') }}">
                    <i class="material-icons">library_books</i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('icons') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>{{ __('Icons') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('map') }}">
                    <i class="material-icons">location_ons</i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('notifications') }}">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
                <a class="nav-link text-white bg-danger" href="{{ route('language') }}">
                    <i class="material-icons">language</i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
