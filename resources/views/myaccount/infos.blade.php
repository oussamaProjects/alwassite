@extends('layouts.myaccount', ['activePage' => 'mypaiments', 'titlePage' => __('Mes paiements')])

@section('content')

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('owners.update', ['owner' => $user]) }}" autocomplete="off"
                        class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Edit user') }}</h4>
                                <p class="card-category">{{ __('users information') }}</p>
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

                                    <div class="col-sm-12">
                                        @if ($errors->any())
                                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                                        @endif
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="first_name" id="input-first_name"
                                                type="text" placeholder="{{ __('First name') }}" required="true"
                                                value="{{ $user->prenom }}" aria-required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="last_name" id="input-last_name" type="text"
                                                value="{{ $user->nom }}" placeholder="{{ __('last name') }}"
                                                required="true" aria-required="true" />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="input-email" type="text"
                                                value="{{ $user->email }}" placeholder="{{ __('email') }}"
                                                required="true" aria-required="true" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="cin" id="input-cin" type="text"
                                                value="{{ $user->cin }}" placeholder="{{ __('Cin') }}"
                                                required="true" aria-required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="tel_mobile" id="input-tel_mobile"
                                                value="{{ $user->tel_mobile }}" type="text"
                                                placeholder="{{ __('tel mobile') }}" required="true"
                                                aria-required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="tel_fixe" id="input-tel_fixe" type="text"
                                                value="{{ $user->tel_fixe }}" placeholder="{{ __('tel fixe') }}"
                                                required="true" aria-required="true" />
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="card-footer ml-auto">
                                <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">properties</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-info">
                                        <tr>
                                            <th>
                                                Name
                                            </th>

                                            <th>
                                                Num
                                            </th>

                                            <th>
                                                Floor
                                            </th>

                                            <th>
                                                Bloc
                                            </th>

                                            <th>
                                                Project
                                            </th>

                                            <th class="text-right">
                                                Payments
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->properties as $property)
                                            <tr>

                                                <td>
                                                    {{ $property->name }}
                                                </td>

                                                <td>
                                                    {{ $property->num }}
                                                </td>

                                                <td>
                                                    {{ $property->floor }}
                                                </td>

                                                <td>
                                                    {{ $property->bloc->name }}
                                                </td>

                                                <td>
                                                    {{ $property->bloc->project->name }}
                                                </td>


                                                <td class="td-actions text-right">
                                                    <a class="property-payments" rel="tooltip" class="btn btn-info btn-link"
                                                        style="color:#1fc2d6;"
                                                        href="{{ route('property-payments', ['property' => $property]) }}">
                                                        <i class="material-icons">info</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="userModal" tabindex="-1" role="">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit property</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <input type="hidden" id="property_id" name="property_id" value="">
                                <label class="col-sm-2 col-form-label" for="name">{{ __('Name') }}</label>
                                <input class="form-control" name="name" id="name" type="text"
                                    placeholder="{{ __('Name') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="num">{{ __('Num') }}</label>
                                <input class="form-control" name="num" id="num" type="text"
                                    placeholder="{{ __('Num') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="floor">{{ __('Floor') }}</label>
                                <input class="form-control" name="floor" id="floor" type="text"
                                    placeholder="{{ __('floor') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="user_id">{{ __('User') }}</label>
                                <select id="user_id" class="form-control" name="user_id">
                                    <option disabled selected>Owner</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="city_id">{{ __('Cities') }}</label>
                                <select id="input-city_id" class="form-control" name="city_id">
                                    <option disabled selected>Cities</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="project_id">{{ __('Blocs') }}</label>
                                <select id="input-project_id" class="form-control" name="project_id">
                                    <option disabled selected>Projects</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="bloc_id">{{ __('Blocs') }}</label>
                                <select id="input-bloc_id" class="form-control" name="bloc_id">
                                    <option disabled selected>Blocs</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="property_id">{{ __('Properties') }}</label>
                                <select id="input-property_id" class="form-control" name="property_id">
                                    <option disabled selected>Properties</option>
                                </select>
                            </div>
                        </div>



                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditproperty" type="button" class="btn btn-info">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    @push('js')

        <script>
            $(document).ready(function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $('body').on('change', '#input-city_id', function(event) {
                    event.preventDefault();
                    var id = this.value;
                    console.log(id);

                    $.get('/cities/' + id, function(data) {

                        $('#input-project_id').empty();
                        $('#input-project_id').append(
                            ' <option disabled selected>{{ __('Projects ') }} </option>'
                        )

                        $('#input-bloc_id').empty();
                        $('#input-bloc_id').append(
                            ' <option disabled selected>{{ __('Blocs ') }} </option>'
                        )

                        $('#input-property_id').empty();
                        $('#input-property_id').append(
                            ' <option disabled selected>{{ __('Properties ') }} </option>'
                        )


                        $.each(data.data.projects, function(index, project) {
                            $('#input-project_id')
                                .append('<option value="' + project.id + '">' +
                                    project.name + '</option>');
                        });
                    });
                });

                $('body').on('change', '#input-project_id', function(event) {
                    event.preventDefault();
                    var id = this.value;
                    $.get('/projects/' + id, function(data) {

                        $('#input-bloc_id').empty();
                        $('#input-bloc_id').append(
                            ' <option disabled selected>{{ __('Blocs ') }} </option>'
                        )

                        $('#input-property_id').empty();
                        $('#input-property_id').append(
                            ' <option disabled selected>{{ __('Properties ') }} </option>'
                        )

                        $.each(data.data.blocs, function(index, bloc) {
                            $('#input-bloc_id')
                                .append('<option value="' + bloc.id + '">' +
                                    bloc.name + '</option>');
                        });
                    })
                });

                $('body').on('change', '#input-bloc_id', function(event) {
                    event.preventDefault();
                    var id = this.value;
                    $.get('/blocs/' + id, function(data) {

                        $('#input-property_id').empty();
                        $('#input-property_id')
                            .append(
                                ' <option disabled selected>{{ __('Properties ') }} </option>'
                            )

                        $.each(data.data.properties, function(index, property) {
                            $('#input-property_id')
                                .append('<option value="' + property.id + '">' +
                                    property.name + '</option>');
                        });
                    })
                });

                $('body').on('click', '#submitEditpayment', function(event) {
                    event.preventDefault()
                    var id = $("#payment_id").val();
                    var name = $("#name").val();
                    var num = $("#num").val();
                    var floor = $("#floor").val();
                    var user_id = $("#user_id").val();
                    var bloc_id = $("#bloc_id").val();

                    var url = "{{ URL('payments') }}" + "/" + id;

                    $.ajax({
                        url: url,
                        type: "PATCH",
                        cache: false,
                        data: {
                            id: id,
                            name: name,
                            num: num,
                            floor: floor,
                            user_id: user_id,
                            bloc_id: bloc_id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            window.location.reload(true);
                        }
                    });
                });

                $('body').on('click', '.editpayment', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    $.get('payments/' + id + '/edit', function(data) {
                        $('#payment_id').val(data.data.id);
                        $('#name').val(data.data.name);
                        $('#num').val(data.data.num);
                        $('#floor').val(data.data.floor);
                        $('#user_id').val(data.data.user_id);
                        $('#bloc_id').val(data.data.bloc_id);
                    })
                });

            });
        </script>

    @endpush

@endsection
