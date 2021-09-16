@extends('layouts.app', ['activePage' => 'claims', 'titlePage' => __('Manage claims')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('claims.store') }}" autocomplete="off" class="form-horizontal">
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
                                            <input class="form-control" name="objet" id="input-objet" type="text"
                                                placeholder="{{ __('Objet') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-user_id" class="form-control" name="user_id">
                                                <option disabled selected>Users</option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->nom }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-property_id" class="form-control" name="property_id">
                                                <option disabled selected>Properties</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-claimType" class="form-control" name="claimType_id">
                                                <option disabled selected>Claims type</option>
                                                @foreach ($claimsTypes as $claimType)
                                                    <option value="{{ $claimType->id }}">{{ $claimType->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <textarea class="form-control" name="message" id="input-message" type="text"
                                                placeholder="{{ __('Message') }}" required="true"
                                                aria-required="true"></textarea>
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
                            <p class="card-category"> Here you can manage claims</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-info">
                                        <tr>
                                            <th>
                                                Objet
                                            </th>
                                            <th>
                                                Claims type
                                            </th>
                                            <th>
                                                Message
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
                                        @foreach ($claims as $claim)
                                            <tr>
                                                <td>
                                                    {{ $claim->objet }}
                                                </td>
                                                <td>
                                                    {{ $claim->claim_type->name }}
                                                </td>
                                                <td>
                                                    {{ $claim->message }}
                                                </td>
                                                <td>
                                                    {{ $claim->created_at->toDayDateTimeString() }}
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a class="editClaimType" rel="tooltip" class="btn btn-success btn-link"
                                                        href="{{ route('claims.edit', $claim->id) }}"
                                                        data-original-title="" title="" data-toggle="modal"
                                                        data-id="{{ $claim->id }}" data-target="#claimModal">
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




    <div class="modal fade" id="claimModal" tabindex="-1" role="">
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
                                <input type="hidden" id="claim_id" name="claim_id" value="">
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
                    <button id="submitEditClaimType" type="button" class="btn btn-info">Save changes</button>
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

                $('body').on('click', '#submitEditClaimType', function(event) {
                    event.preventDefault()
                    var id = $("#claim_id").val();
                    var name = $("#name").val();
                    var display_name = $("#display_name").val();
                    var description = $("#description").val();

                    var url = "{{ URL('claim') }}" + "/" + id;

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

                $('body').on('click', '.editClaimType', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    $.get('claim/' + id + '/edit', function(data) {
                        console.log(data);
                        $('#claim_id').val(data.data.id);
                        $('#name').val(data.data.name);
                        $('#display_name').val(data.data.display_name);
                        $('#description').val(data.data.description);
                    })
                });


                $('body').on('change', '#input-user_id', function(event) {
                    event.preventDefault();
                    var id = this.value;

                    $.get('users/' + id, function(data) {

                        $('#input-property_id').empty();
                        $('#input-property_id').append(
                            ' <option disabled selected>{{ __('Properties') }} </option>')

                        $.each(data.data.properties, function(index, property) {
                            $('#input-property_id')
                                .append('<option value="' + property.id + '">' +
                                    property.name + '</option>');
                        });
                    })
                });


            });
        </script>

    @endpush

@endsection
