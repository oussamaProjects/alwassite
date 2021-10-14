@extends('layouts.app', ['activePage' => 'services', 'titlePage' => __('Manage services')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('services.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Add service') }}</h4>
                                <p class="card-category">{{ __('Service information') }}</p>
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
                            <h4 class="card-title ">Service</h4>
                            <p class="card-category"> Here you can manage services</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-info">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
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
                                        @foreach ($services as $service)
                                            <tr>
                                                <td>
                                                    {{ $service->id }}
                                                </td>
                                                <td>
                                                    {{ $service->name }}
                                                </td>
                                                <td>
                                                    {{ $service->created_at->toDayDateTimeString() }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a class="editCity" rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('projects.edit', $service->id) }}"
                                                        data-original-title="" title="" data-toggle="modal"
                                                        data-id="{{ $service->id }}" data-target="#serviceModal">
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




    <div class="modal fade" id="serviceModal" tabindex="-1" role="">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <input type="hidden" id="service_id" name="service_id" value="">
                                <label class="col-sm-2 col-form-label" for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control" placeholder="Name..." id="name" name="name">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditService" type="button" class="btn btn-info">Save changes</button>
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

                $('body').on('click', '#submitEditService', function(event) {
                    event.preventDefault()
                    var id = $("#service_id").val();
                    var name = $("#name").val();

                    consoloe.log(id);
                    consoloe.log(name);

                    var url = "{{ URL('services') }}" + "/" + id;

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
                    $.get('services/' + id + '/edit', function(data) {
                        $('#service_id').val(data.data.id);
                        $('#name').val(data.data.name);
                    })
                });

            });
        </script>

    @endpush

@endsection
