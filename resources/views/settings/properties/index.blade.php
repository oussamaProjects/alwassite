@extends('layouts.app', ['activePage' => 'properties', 'titlePage' => __('Manage properties')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('properties.store') }}" autocomplete="off"
                        class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add property') }}</h4>
                                <p class="card-category">{{ __('properties information') }}</p>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">

                                    <div class="col-sm-4">
                                        @if ($errors->any())
                                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="input-name" type="text"
                                                placeholder="{{ __('Name') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="num" id="input-num" type="text"
                                                placeholder="{{ __('num') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="floor" id="input-floor" type="text"
                                                placeholder="{{ __('floor') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-user_id" class="form-control" name="user_id">
                                                <option disabled selected>Owners</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->nom }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-bloc_id" class="form-control" name="bloc_id">
                                                <option disabled selected>Blocs</option>
                                                @foreach ($blocs as $bloc)
                                                    <option value="{{ $bloc->id }}">{{ $bloc->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer ml-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">properties</h4>
                            <p class="card-category"> Here you can manage properties</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
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
                                                Blocs
                                            </th>
                                            <th>
                                                Project
                                            </th>
                                            <th>
                                                City
                                            </th>
                                            <th>
                                                localitation
                                            </th>
                                            <th>
                                                Owner
                                            </th>
                                            <th>
                                                Creation date
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($properties as $property)
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

                                                <td>
                                                    {{ $property->bloc->project->city->name }}
                                                </td>

                                                <td>
                                                    {{ $property->bloc->project->localisation->long }},
                                                    {{ $property->bloc->project->localisation->lat }}
                                                </td>

                                                <td>
                                                    {{ $property->user->email }}
                                                </td>

                                                <td>
                                                    {{ $property->created_at->toDayDateTimeString() }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a class="editproperty" rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('properties.edit', $property->id) }}"
                                                        data-original-title="" title="" data-toggle="modal"
                                                        data-id="{{ $property->id }}" data-target="#propertyModal">
                                                        <i class="material-icons">edit</i>
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




    <div class="modal fade" id="propertyModal" tabindex="-1" role="">
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
                                <label class="col-sm-2 col-form-label" for="bloc_id">{{ __('Bloc') }}</label>
                                <select id="bloc_id" class="form-control" name="bloc_id">
                                    <option disabled selected>Bloc</option>
                                    @foreach ($blocs as $bloc)
                                        <option value="{{ $bloc->id }}">{{ $bloc->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditproperty" type="button" class="btn btn-primary">Save changes</button>
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

                $('body').on('click', '#submitEditproperty', function(event) {
                    event.preventDefault()
                    var id = $("#property_id").val();
                    var name = $("#name").val();
                    var num = $("#num").val();
                    var floor = $("#floor").val();
                    var user_id = $("#user_id").val();
                    var bloc_id = $("#bloc_id").val();

                    var url = "{{ URL('properties') }}" + "/" + id;

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

                $('body').on('click', '.editproperty', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    console.log(id)
                    $.get('properties/' + id + '/edit', function(data) {
                        console.log(data.data.id);
                        $('#property_id').val(data.data.id);
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
