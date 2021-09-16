@extends('layouts.app', ['activePage' => 'cities', 'titlePage' => __('Manage cities')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('cities.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Add citiy') }}</h4>
                                <p class="card-category">{{ __('Cities information') }}</p>
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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="input-name" type="text"
                                                placeholder="{{ __('Name') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto">
                                    <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Cities</h4>
                            <p class="card-category"> Here you can manage cities</p>
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
                                                Creation date
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cities as $city)
                                            <tr>
                                                <td>
                                                    {{ $city->name }}
                                                </td>
                                                <td>
                                                    {{ $city->created_at->toDayDateTimeString() }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a class="editCity" rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('projects.edit', $city->id) }}"
                                                        data-original-title="" title="" data-toggle="modal"
                                                        data-id="{{ $city->id }}" data-target="#cityModal">
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




    <div class="modal fade" id="cityModal" tabindex="-1" role="">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit city</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <input type="hidden" id="city_id" name="city_id" value="">
                                <label class="col-sm-2 col-form-label" for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control" placeholder="Name..." id="name" name="name">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditCity" type="button" class="btn btn-info">Save changes</button>
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

                $('body').on('click', '#submitEditCity', function(event) {
                    event.preventDefault()
                    var id = $("#city_id").val();
                    var name = $("#name").val();

                    var url = "{{ URL('cities') }}" + "/" + id;

                    $.ajax({
                        url: url,
                        type: "PATCH",
                        cache: false,
                        data: {
                            id: id,
                            name: name,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            window.location.reload(true);
                        }
                    });
                });

                $('body').on('click', '.editCity', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    console.log(id)
                    $.get('cities/' + id + '/edit', function(data) {
                        $('#city_id').val(data.data.id);
                        $('#name').val(data.data.name);
                    })
                });

            });
        </script>

    @endpush

@endsection
