@extends('layouts.myaccount', ['activePage' => 'mypaiments', 'titlePage' => __('Mes paiements')])

@section('content')
    <div class="content">
        <div class="container">

            <div class="row">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        {!! Form::hidden('property_id', $property->id, ['id' => 'input-property_id']) !!}
                                        <select id="input-year" class="form-control" name="year_id">
                                            <option disabled selected>Year</option>
                                            <option>2020</option>
                                            <option>2021</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="col-sm-3">
                                    <div class="form-group">
                                        <select id="input-city_id" class="form-control" name="city_id">
                                            <option disabled selected>Cities</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select id="input-project_id" class="form-control" name="project_id">
                                            <option disabled selected>Projects</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select id="input-bloc_id" class="form-control" name="bloc_id">
                                            <option disabled selected>Blocs</option>
                                        </select>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">Payments</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-info">
                                        <th>
                                            name
                                        </th>
                                        <th>
                                            bloc
                                        </th>
                                        <th>
                                            project
                                        </th>
                                        <th>
                                            month_paie
                                        </th>
                                        <th>
                                            year_paie
                                        </th>
                                    </thead>
                                    <tbody id="payement_per_year">
                                        @foreach ($property_payments as $payment)
                                            <tr>
                                                <td>
                                                    {{ $payment->property->name }}
                                                </td>

                                                <td>
                                                    {{ $payment->property->bloc->name }}
                                                </td>

                                                <td>
                                                    {{ $payment->property->bloc->project->name }}
                                                </td>

                                                <td>
                                                    {{ $payment->month_paie }}
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


    @push('js')

        <script>
            $('body').on('change', '#input-year_paie', function(event) {
                event.preventDefault();
                var year_paie = this.value;
                $.get('payments/year/' + year_paie + '/property/' + property_id, function(
                    data) {
                    $.each(data.payments, function(index, payment) {
                        months.push(parseInt(payment.month_paie));
                    });
                })
            });

            $('body').on('change', '#input-city_id', function(event) {
                event.preventDefault();
                var id = this.value;

                $.get('/cities/' + id, function(data) {

                    $('#input-project_id').empty();
                    $('#input-project_id').append(
                        ' <option disabled selected>{{ __('Projects') }} </option>')

                    $('#input-bloc_id').empty();
                    $('#input-bloc_id').append(
                        ' <option disabled selected>{{ __('Blocs') }} </option>')


                    $.each(data.data.projects, function(index, project) {
                        $('#input-project_id')
                            .append('<option value="' + project.id + '">' +
                                project.name + '</option>');
                    });
                });


                $.get('/payments/city/' + id, function(data) {
                    console.log(data);
                    $('#payement_per_month').empty();
                    $.each(data.payments, function(index, payment) {
                        $('#payement_per_month').append(paymentRow(payment));
                    });
                });
            });

            $('body').on('change', '#input-project_id', function(event) {
                event.preventDefault();
                var id = this.value;
                console.log(id);
                $.get('/projects/' + id, function(data) {

                    $('#input-bloc_id').empty();
                    $('#input-bloc_id').append(
                        ' <option disabled selected>{{ __('Blocs') }} </option>')

                    $.each(data.data.blocs, function(index, bloc) {
                        $('#input-bloc_id')
                            .append('<option value="' + bloc.id + '">' +
                                bloc.name + '</option>');
                    });
                })

                $.get('/payments/project/' + id, function(data) {
                    console.log(data);
                    $('#payement_per_month').empty();
                    $.each(data.payments, function(index, payment) {
                        $('#payement_per_month').append(paymentRow(payment));
                    });
                });

            });

            $('body').on('change', '#input-year', function(event) {
                event.preventDefault();
                var year = this.value;
                var property_id = $('#input-property_id').val();

                $.get('/myaccount/property/' + property_id + '/year/' + year + '/payments', function(data) {
                    console.log(data);
                    $('#payement_per_year').empty();
                    $.each(data.payments, function(index, payment) {
                        $('#payement_per_year').append(paymentRow(payment));
                    });
                });
            });

            $('body').on('change', '#input-bloc_id', function(event) {
                event.preventDefault();
                var property_id = $('#input-property_id').val();

                $.get('/myaccount/property/' + property_id + '/property_payments_ajax', function(data) {
                    console.log(data);
                    $('#payement_per_month').empty();
                    $.each(data.payments, function(index, payment) {
                        $('#payement_per_month').append(paymentRow(payment));
                    });
                });
            });

            function paymentRow(param) {

                return '<tr><td>' + param.name +
                    '</td><td>' + param.bloc +
                    '</td><td>' + param.project +
                    '</td><td>' + param.month_paie +
                    '</td><td>' + param.year_paie +
                    '</td> </tr>';
            }
        </script>

    @endpush
@endsection
