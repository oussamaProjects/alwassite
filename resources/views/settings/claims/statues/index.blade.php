@extends('layouts.app', ['activePage' => 'claimsStatues', 'titlePage' => __('Manage claimsStatues')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('claims_statues.store') }}" autocomplete="off"
                        class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Add claim') }}</h4>
                                <p class="card-category">{{ __('Claims information') }}</p>
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
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="display_name" id="input-display_name"
                                                type="text" placeholder="{{ __('Display name') }}" required="true"
                                                aria-required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="description" id="input-description"
                                                type="text" placeholder="{{ __('Description') }}" required="true"
                                                aria-required="true" />
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
                            <h4 class="card-title ">Claims</h4>
                            <p class="card-category"> Here you can manage claimsStatues</p>
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
                                                Display Name
                                            </th>
                                            <th>
                                                Description
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
                                        @foreach ($claimsStatues as $claimType)
                                            <tr>
                                                <td>
                                                    {{ $claimType->name }}
                                                </td>
                                                <td>
                                                    {{ $claimType->display_name }}
                                                </td>
                                                <td>
                                                    {{ $claimType->description }}
                                                </td>
                                                <td>
                                                    {{ $claimType->created_at->toDayDateTimeString() }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a class="editClaimStatue" rel="tooltip"
                                                        class="btn btn-success btn-link"
                                                        href="{{ route('claims_statues.edit', $claimType->id) }}"
                                                        data-original-title="" title="" data-toggle="modal"
                                                        data-id="{{ $claimType->id }}" data-target="#claimTypeModal">
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




    <div class="modal fade" id="claimTypeModal" tabindex="-1" role="">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit claim</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <input type="hidden" id="claim_statue_id" name="claim_statue_id" value="">
                                <label class="col-sm-2 col-form-label" for="name">{{ __('Name') }}</label>
                                <input type="text" class="form-control" placeholder="Name..." id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label"
                                    for="display_name">{{ __('Display name') }}</label>
                                <input type="text" class="form-control" placeholder="Name..." id="display_name"
                                    name="display_name">
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="description">{{ __('Name') }}</label>
                                <input type="text" class="form-control" placeholder="Description..." id="description"
                                    name="description">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditClaimStatue" type="button" class="btn btn-info">Save changes</button>
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

                $('body').on('click', '#submitEditClaimStatue', function(event) {
                    event.preventDefault()
                    var id = $("#claim_statue_id").val();
                    var name = $("#name").val();
                    var display_name = $("#display_name").val();
                    var description = $("#description").val();

                    var url = "{{ URL('claims_statues') }}" + "/" + id;

                    $.ajax({
                        url: url,
                        type: "PATCH",
                        cache: false,
                        data: {
                            id: id,
                            name: name,
                            display_name: display_name,
                            description: description,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            window.location.reload(true);
                        }
                    });
                });

                $('body').on('click', '.editClaimStatue', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    $.get('claims_statues/' + id + '/edit', function(data) {
                        console.log(data);
                        $('#claim_statue_id').val(data.data.id);
                        $('#name').val(data.data.name);
                        $('#display_name').val(data.data.display_name);
                        $('#description').val(data.data.description);
                    })
                });

            });
        </script>

    @endpush

@endsection
