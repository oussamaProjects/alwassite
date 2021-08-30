@extends('layouts.app', ['activePage' => 'payments', 'titlePage' => __('Manage payments')])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('payments.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Add a pay') }}</h4>
                                <p class="card-category">{{ __('payments information') }}</p>
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

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-property_id" class="form-control" name="property_id">
                                                <option disabled selected>Properties</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-year_paie" class="form-control" name="year_paie">
                                                <option disabled selected>Payment year</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                    </div>

                                    {{-- <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-month_paie" class="form-control" name="month_paie">
                                                <option disabled selected>Payment month</option>
                                                <option value="1">{{ __('Janvier') }}</option>
                                                <option value="2">{{ __('Fevrier') }}</option>
                                                <option value="3">{{ __('Mars') }}</option>
                                                <option value="4">{{ __('Avril') }}</option>
                                                <option value="5">{{ __('Mai') }}</option>
                                                <option value="6">{{ __('Juin') }}</option>
                                                <option value="7">{{ __('Juillet') }}</option>
                                                <option value="8">{{ __('Août') }}</option>
                                                <option value="9">{{ __('Septembre') }}</option>
                                                <option value="10">{{ __('Octobre') }}</option>
                                                <option value="11">{{ __('Novembre') }}</option>
                                                <option value="12">{{ __('Décembre') }}</option>
                                            </select>
                                        </div>
                                    </div> --}}

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="zone_month" class="form-control" name="month_paie">
                                                <option disabled selected>Payment month</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <textarea name="note" id="note" cols="30" rows="4" class="form-control"
                                                placeholder="{{ __('Note') }}"></textarea>
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
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Payments per month ({{ \Carbon\Carbon::now()->format('F') }})</h4>
                            <p class="card-category"> Here you can manage payments</p>
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
                                                year
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($payments_per_month as $payment)
                                            <tr>

                                                <td>
                                                    {{ $payment->name }}
                                                </td>
                                                <td>
                                                    {{ $payment->year_paie }}
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">NEED TO BE PAID ({{ \Carbon\Carbon::now()->format('F') }})</h4>
                            <p class="card-category"> Here you can manage payments</p>
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
                                                year
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($need_to_be_paid as $payment)
                                            <tr>

                                                <td>
                                                    {{ $payment->name }}
                                                </td>
                                                <td>
                                                    {{ $payment->year_paie }}
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
                    })
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

                $('body').on('change', '#input-bloc_id', function(event) {
                    event.preventDefault();
                    var id = this.value;
                    $.get('blocs/' + id, function(data) {

                        $('#input-property_id').empty();
                        $('#input-property_id')
                            .append(
                                ' <option disabled selected>{{ __('Properties') }} </option>')

                        $.each(data.data.properties, function(index, property) {
                            $('#input-property_id')
                                .append('<option value="' + property.id + '">' +
                                    property.name + '</option>');
                        });
                    })
                });

                $('body').on('change', '#input-year_paie', function(event) {
                    event.preventDefault();
                    var year_paie = this.value;
                    var property_id = $('#input-property_id').val();

                    var months = new Array();
                    $.get('payments/year/' + year_paie + '/property/' + property_id, function(data) {
                        $.each(data.payments, function(index, payment) {
                            months.push(parseInt(payment.month_paie));
                        });
                    })

                    console.log(months);

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
