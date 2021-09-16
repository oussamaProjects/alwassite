@extends('layouts.myaccount', ['activePage' => 'mypaiments', 'titlePage' => __('Mes paiements')])

@section('content')
    <div class="content">
        <div class="container">
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
                                    <tbody>
                                        @foreach ($payments as $payment)
                                            <tr>
                                                <td>
                                                    {{ $payment->name }}
                                                </td>

                                                <td>
                                                    {{ $payment->bloc }}
                                                </td>

                                                <td>
                                                    {{ $payment->project }}
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
@endsection
