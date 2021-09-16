@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Edit Profile') }}</h4>
                                <p class="card-category">{{ __('User information') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Nom') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('nom') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}"
                                                nom="nom" id="input-nom" type="text" placeholder="{{ __('Nom') }}"
                                                value="{{ old('nom', auth()->user()->name) }}" required="true"
                                                aria-required="true" />
                                            @if ($errors->has('nom'))
                                                <span id="nom-error" class="error text-danger"
                                                    for="input-nom">{{ $errors->first('nom') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Prénom') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('prenom') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}"
                                                name="prenom" id="input-prenom" type="text"
                                                placeholder="{{ __('Prénom') }}"
                                                value="{{ old('prenom', auth()->user()->prenom) }}" required="true"
                                                aria-required="true" />
                                            @if ($errors->has('prenom'))
                                                <span id="prenom-error" class="error text-danger"
                                                    for="input-prenom">{{ $errors->first('prenom') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Téléphone Mobile') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('tel_mobile') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('tel_mobile') ? ' is-invalid' : '' }}"
                                                name="tel_mobile" id="input-tel_mobile" type="text"
                                                placeholder="{{ __('Téléphone Mobile') }}"
                                                value="{{ old('tel_mobile', auth()->user()->tel_mobile) }}"
                                                required="true" aria-required="true" />
                                            @if ($errors->has('tel_mobile'))
                                                <span id="tel_mobile-error" class="error text-danger"
                                                    for="input-tel_mobile">{{ $errors->first('tel_mobile') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Téléphone Fixe') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('tel_fixe') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('tel_fixe') ? ' is-invalid' : '' }}"
                                                name="tel_fixe" id="input-tel_fixe" type="text"
                                                placeholder="{{ __('Téléphone Fixe') }}"
                                                value="{{ old('tel_fixe', auth()->user()->tel_fixe) }}" required="true"
                                                aria-required="true" />
                                            @if ($errors->has('tel_fixe'))
                                                <span id="tel_fixe-error" class="error text-danger"
                                                    for="input-tel_fixe">{{ $errors->first('tel_fixe') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email" id="input-email" type="email"
                                                placeholder="{{ __('Email') }}"
                                                value="{{ old('email', auth()->user()->email) }}" required />
                                            @if ($errors->has('email'))
                                                <span id="email-error" class="error text-danger"
                                                    for="input-email">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('CIN') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('cin') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('cin') ? ' is-invalid' : '' }}"
                                                name="cin" id="input-cin" type="cin" placeholder="{{ __('CIN') }}"
                                                value="{{ old('cin', auth()->user()->cin) }}" required />
                                            @if ($errors->has('cin'))
                                                <span id="cin-error" class="error text-danger"
                                                    for="input-cin">{{ $errors->first('cin') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Adresse') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('adresse') ? ' has-danger' : '' }}">
                                            <textarea
                                                class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}"
                                                name="adresse" id="input-adresse" type="adresse"
                                                placeholder="{{ __('Adresse') }}"
                                                value="{{ old('adresse', auth()->user()->adresse) }}"
                                                required></textarea>
                                            @if ($errors->has('adresse'))
                                                <span id="adresse-error" class="error text-danger"
                                                    for="input-adresse">{{ $errors->first('adresse') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Genre') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('sexe') ? ' has-danger' : '' }}">
                                            <select id="input-sexe" class="form-control" name="sexe">
                                                <option disabled selected>Genre</option>
                                                <option value="1">{{ __('Mâle') }}</option>
                                                <option value="2">{{ __('Femelle') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Change password') }}</h4>
                                <p class="card-category">{{ __('Password') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status_password'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status_password') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"
                                        for="input-current-password">{{ __('Current Password') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}"
                                                input type="password" name="old_password" id="input-current-password"
                                                placeholder="{{ __('Current Password') }}" value="" required />
                                            @if ($errors->has('old_password'))
                                                <span id="name-error" class="error text-danger"
                                                    for="input-name">{{ $errors->first('old_password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"
                                        for="input-password">{{ __('New Password') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                            <input
                                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                name="password" id="input-password" type="password"
                                                placeholder="{{ __('New Password') }}" value="" required />
                                            @if ($errors->has('password'))
                                                <span id="password-error" class="error text-danger"
                                                    for="input-password">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label"
                                        for="input-password-confirmation">{{ __('Confirm New Password') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <input class="form-control" name="password_confirmation"
                                                id="input-password-confirmation" type="password"
                                                placeholder="{{ __('Confirm New Password') }}" value="" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-info">{{ __('Change password') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
