@extends('layouts.app', ['activePage' => 'blocs', 'titlePage' => __('Manage blocs')])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('blocs.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add bloc') }}</h4>
                                <p class="card-category">{{ __('blocs information') }}</p>
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
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="input-name" type="text"
                                                placeholder="{{ __('Name') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select id="input-city_id" class="form-control" name="city_id">
                                                <option disabled selected>Cities</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <select id="input-project_id" class="form-control" name="project_id">
                                                <option disabled selected>Projects</option>
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
                            <h4 class="card-title ">Blocs</h4>
                            <p class="card-category"> Here you can manage blocs</p>
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
                                                Project Name
                                            </th>
                                            <th>
                                                City
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
                                        @foreach ($blocs as $bloc)
                                            <tr>
                                                <td>
                                                    {{ $bloc->name }}
                                                </td>
                                                <td>
                                                    {{ $bloc->project->name }}
                                                </td>
                                                <td>
                                                    {{ $bloc->project->city->name }}
                                                </td>
                                                <td>
                                                    {{ $bloc->project->localisation->long }},
                                                    {{ $bloc->project->localisation->lat }}
                                                </td>
                                                <td>
                                                    {{ $bloc->created_at->toDayDateTimeString() }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a class="editbloc" rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('blocs.edit', $bloc->id) }}"
                                                        data-original-title="" title="" data-toggle="modal"
                                                        data-id="{{ $bloc->id }}" data-target="#blocModal">
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

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">PAIMENTS</h4>
                            <p class="card-category"> Here you can manage payments</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>

                                            <th>
                                                Bloc
                                            </th>
                                            <th>
                                                Month paie
                                            </th>
                                            <th>
                                                Year paie
                                            </th>
                                            <th>
                                                Paid
                                            </th>
                                            <th>
                                                Should be paid
                                            </th>
                                            <th>
                                                Impaid
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bloc_need_to_be_paid as $payment)
                                            <tr>

                                                <td>
                                                    {{ $payment->name }}
                                                </td>
                                                <td>
                                                    {{ $payment->month_paie }}
                                                </td>
                                                <td>
                                                    {{ $payment->year_paie }}
                                                </td>
                                                <td>
                                                    {{ $payment->paid }}
                                                </td>
                                                <td>
                                                    {{ $payment->should_be_paid }}
                                                </td>
                                                <td>
                                                    {{ $payment->should_be_paid - $payment->paid }}
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




    <div class="modal fade" id="blocModal" tabindex="-1" role="">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit bloc</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <input type="hidden" id="bloc_id" name="bloc_id" value="">
                                <label class="col-sm-2 col-form-label" for="name">{{ __('Name') }}</label>
                                <input class="form-control" name="name" id="name" type="text"
                                    placeholder="{{ __('Name') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="project_id">{{ __('Project') }}</label>
                                <select id="project_id" class="form-control" name="project_id">
                                    <option disabled selected>Single Option</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditbloc" type="button" class="btn btn-primary">Save changes</button>
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

                    $.get('cities/' + id, function(data) {

                        $('#input-project_id').empty();
                        $('#input-project_id').append(
                            ' <option disabled selected>{{ __('Projects') }} </option>')

                        $('#input-bloc_id').empty();
                        $('#input-bloc_id').append(
                            ' <option disabled selected>{{ __('Blocs') }} </option>')

                        $('#input-property_id').empty();
                        $('#input-property_id').append(
                            ' <option disabled selected>{{ __('Properties') }} </option>')


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
                    $.get('projects/' + id, function(data) {

                        $('#input-bloc_id').empty();
                        $('#input-bloc_id').append(
                            ' <option disabled selected>{{ __('Blocs') }} </option>')

                        $('#input-property_id').empty();
                        $('#input-property_id').append(
                            ' <option disabled selected>{{ __('Properties') }} </option>')

                        $.each(data.data.blocs, function(index, bloc) {
                            $('#input-bloc_id')
                                .append('<option value="' + bloc.id + '">' +
                                    bloc.name + '</option>');
                        });
                    })
                });


                $('body').on('click', '#submitEditbloc', function(event) {
                    event.preventDefault()
                    var id = $("#bloc_id").val();
                    var name = $("#name").val();
                    var project_id = $("#project_id").val();

                    var url = "{{ URL('blocs') }}" + "/" + id;

                    $.ajax({
                        url: url,
                        type: "PATCH",
                        cache: false,
                        data: {
                            id: id,
                            name: name,
                            project_id: project_id,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            window.location.reload(true);
                        }
                    });
                });

                $('body').on('click', '.editbloc', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    console.log(id)
                    $.get('blocs/' + id + '/edit', function(data) {
                        console.log(data.data.id);
                        $('#bloc_id').val(data.data.id);
                        $('#name').val(data.data.name);
                        $('#project_id').val(data.data.project_id);
                    })
                });

            });
        </script>

    @endpush

@endsection
