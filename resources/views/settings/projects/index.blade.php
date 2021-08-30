@extends('layouts.app', ['activePage' => 'projects', 'titlePage' => __('Manage projects')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('projects.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add project') }}</h4>
                                <p class="card-category">{{ __('projects information') }}</p>
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
                                            <input class="form-control" name="long" id="input-long" type="text"
                                                placeholder="{{ __('Longitude') }}" required="true"
                                                aria-required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="lat" id="input-lat" type="text"
                                                placeholder="{{ __('Latitude') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-city_id" class="form-control" name="city_id">
                                                <option disabled selected>Single Option</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
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
                            <h4 class="card-title ">projects</h4>
                            <p class="card-category"> Here you can manage projects</p>
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
                                                City Name
                                            </th>
                                            <th>
                                                localisation
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
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>
                                                    {{ $project->name }}
                                                </td>
                                                <td>
                                                    {{ $project->city->name }}
                                                </td>
                                                <td>
                                                    {{ $project->localisation->long }},
                                                    {{ $project->localisation->lat }}
                                                </td>
                                                <td>
                                                    {{ $project->created_at->toDayDateTimeString() }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a class="editProject" rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('projects.edit', $project->id) }}"
                                                        data-original-title="" title="" data-toggle="modal"
                                                        data-id="{{ $project->id }}" data-target="#projectModal">
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




    <div class="modal fade" id="projectModal" tabindex="-1" role="">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <input type="hidden" id="project_id" name="project_id" value="">
                                <label class="col-sm-2 col-form-label" for="name">{{ __('Name') }}</label>
                                <input class="form-control" name="name" id="name" type="text"
                                    placeholder="{{ __('Name') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="long">{{ __('Longitude') }}</label>
                                <input class="form-control" name="long" id="long" type="text"
                                    placeholder="{{ __('Longitude') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="lat">{{ __('Latitude') }}</label>
                                <input class="form-control" name="lat" id="lat" type="text"
                                    placeholder="{{ __('Latitude') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="city_id">{{ __('City') }}</label>
                                <select id="city_id" class="form-control" name="city_id">
                                    <option disabled selected>Single Option</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditProject" type="button" class="btn btn-primary">Save changes</button>
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

                $('body').on('click', '#submitEditProject', function(event) {
                    event.preventDefault()
                    var id = $("#project_id").val();
                    var name = $("#name").val();
                    var city_id = $("#city_id").val();
                    var long = $("#long").val();
                    var lat = $("#lat").val();

                    var url = "{{ URL('projects') }}" + "/" + id;

                    $.ajax({
                        url: url,
                        type: "PATCH",
                        cache: false,
                        data: {
                            id: id,
                            name: name,
                            city_id: city_id,
                            long: long,
                            lat: lat,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            window.location.reload(true);
                        }
                    });
                });

                $('body').on('click', '.editProject', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    console.log(id)
                    $.get('projects/' + id + '/edit', function(data) {
                        console.log(data.data.id);
                        $('#project_id').val(data.data.id);
                        $('#name').val(data.data.name);
                        $('#long').val(data.data.long);
                        $('#lat').val(data.data.lat);
                        $('#city_id').val(data.data.city_id);
                    })
                });

            });
        </script>

    @endpush

@endsection
