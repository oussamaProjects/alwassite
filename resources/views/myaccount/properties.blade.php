@extends('layouts.myaccount', ['activePage' => 'mypaiments', 'titlePage' => __('Mes paiements')])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">properties</h4>
                            <p class="card-category"> Here you can manage properties</p>
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
                                                Num
                                            </th>
                                            <th>
                                                Floor
                                            </th>
                                            <th>
                                                Blocs
                                            </th>
                                            <th>
                                                Project
                                            </th>
                                            <th>
                                                City
                                            </th>
                                            <th>
                                                localitation
                                            </th>
                                            <th>
                                                Owner
                                            </th>
                                            <th>
                                                Creation date
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($properties as $property)
                                            <tr>
                                                <td>
                                                    {{ $property->name }}
                                                </td>

                                                <td>
                                                    {{ $property->num }}
                                                </td>

                                                <td>
                                                    {{ $property->floor }}
                                                </td>

                                                <td>
                                                    {{ $property->bloc->name }}
                                                </td>

                                                <td>
                                                    {{ $property->bloc->project->name }}
                                                </td>

                                                <td>
                                                    {{ $property->bloc->project->city->name }}
                                                </td>

                                                <td>
                                                    {{ $property->bloc->project->localisation->long }},
                                                    {{ $property->bloc->project->localisation->lat }}
                                                </td>

                                                <td>
                                                    {{ $property->user->email }}
                                                </td>

                                                <td>
                                                    {{ $property->created_at->toDayDateTimeString() }}
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
