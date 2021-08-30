@extends('layouts.app', ['activePage' => 'paymentsListe', 'titlePage' => __('Manage payments')])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select id="input-city_id" class="form-control" name="city_id">
                                            <option disabled selected>Cities</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select id="input-project_id" class="form-control" name="project_id">
                                            <option disabled selected>Projects</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <select id="input-bloc_id" class="form-control" name="bloc_id">
                                            <option disabled selected>Blocs</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Need to be paid ({{ \Carbon\Carbon::now()->format('F') }})</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>


                                            <th>
                                                property
                                            </th>
                                            <th>
                                                user
                                            </th>
                                            <th>
                                                Téléphone
                                            </th>

                                            <th>
                                                Bloc
                                            </th>

                                            <th>
                                                Project
                                            </th>
                                            <th>
                                                City
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="payement_per_month">
                                        @foreach ($need_to_be_paid as $payment)
                                            <tr>

                                                <td>
                                                    {{ $payment->name }}
                                                </td>
                                                <td>
                                                    {{ $payment->user }}
                                                </td>
                                                <td>
                                                    {{ $payment->tel_mobile }}
                                                </td>
                                                <td>
                                                    {{ $payment->bloc }}
                                                </td>
                                                <td>
                                                    {{ $payment->project }}
                                                </td>
                                                <td>
                                                    {{ $payment->city }}
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


    <div class="modal fade" id="paymentModal" tabindex="-1" role="">
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


                    $.get('payments/city/' + id, function(data) {
                        console.log(data);
                        $('#payement_per_month').empty();
                        $.each(data.payments, function(index, payment) {
                            $('#payement_per_month').append(paymentRow(payment));
                        });
                    });
                });

                $('body').on('change', '#input-year_paie', function(event) {
                    event.preventDefault();
                    var year_paie = this.value;
                    var property_id = $('#input-property_id').val();

                    var months = new Array();
                    $.get('payments/year/' + year_paie + '/property/' + property_id, function(
                        data) {
                        $.each(data.payments, function(index, payment) {
                            months.push(parseInt(payment.month_paie));
                        });
                    })

                    all_months = {
                        1: "Janvier",
                        2: "Fevrier",
                        3: "Mars",
                        4: "Avril",
                        5: "Mai",
                        6: "Juin",
                        7: "Juillet",
                        8: "Août",
                        9: "Septembre",
                        10: "Octobre",
                        11: "Novembre",
                        12: "Décembre"
                    };

                    for (var key in all_months) {
                        // if (months.indexOf(parseInt(key)) == -1) {
                        //     $('#zone_month')
                        //         .append('<option disabled value="' + key + '">' +
                        //             all_months[key] + '</option>');
                        // } else {}

                        $('#zone_month')
                            .append('<option value="' + key + '">' +
                                all_months[key] + '</option>');

                    }
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
                            ' <option disabled selected>{{ __('Properties') }} </option>'
                        )

                        $.each(data.data.blocs, function(index, bloc) {
                            $('#input-bloc_id')
                                .append('<option value="' + bloc.id + '">' +
                                    bloc.name + '</option>');
                        });
                    })

                    $.get('payments/project/' + id, function(data) {
                        console.log(data);
                        $('#payement_per_month').empty();
                        $.each(data.payments, function(index, payment) {
                            $('#payement_per_month').append(paymentRow(payment));
                        });
                    });

                });

                $('body').on('change', '#input-bloc_id', function(event) {
                    event.preventDefault();
                    var id = this.value;
                    $.get('blocs/' + id, function(data) {

                        $('#input-property_id').empty();
                        $('#input-property_id')
                            .append(
                                ' <option disabled selected>{{ __('Properties') }} </option>'
                            )

                        $.each(data.data.properties, function(index, property) {
                            $('#input-property_id')
                                .append('<option value="' + property.id + '">' +
                                    property.name + '</option>');
                        });
                    })

                    $.get('payments/bloc/' + id, function(data) {
                        console.log(data);
                        $('#payement_per_month').empty();
                        $.each(data.payments, function(index, payment) {
                            $('#payement_per_month').append(paymentRow(payment));
                        });
                    });
                });

                function paymentRow(param) {

                    return '<tr><td>' + param.name +
                        '</td><td>' + param.user +
                        '</td><td>' + param.tel_mobile +
                        '</td><td>' + param.bloc +
                        '</td><td>' + param.project +
                        '</td><td>' + param.city +
                        '</td> </tr>';
                }

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
