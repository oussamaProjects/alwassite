@extends('layouts.app', ['activePage' => 'service_calculator', 'titlePage' => __('Manage service')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{ route('budgets.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card ">
                            <div class="card-header card-header-info">
                                <h4 class="card-title">{{ __('Add service') }}</h4>
                                <p class="card-category">{{ __('service information') }}</p>
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
                                        @if ($errors->any())
                                            {!! implode('', $errors->all('<div>:message</div>')) !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select id="project_id" class="form-control" name="project_id">
                                                <option disabled selected>Project</option>
                                                @foreach ($projects as $project)
                                                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select id="service_id" class="form-control" name="service_id">
                                                <option disabled selected>Service</option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" name="qty" id="input-qty" type="text"
                                                placeholder="{{ __('qty') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" name="price" id="input-price" type="text"
                                                placeholder="{{ __('price') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card-footer ml-auto">
                                <button type="submit" class="btn btn-info">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="row">

                <div class="col-sm-3">
                    <div class="form-group">
                        <select id="project_id" class="form-control" name="project_id">
                            <option disabled selected>Project</option>
                            @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title "> {{ $budgets[0]->project }}</h4>
                            <p class="card-category"> {{ $budgets[0]->city }} </p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-info">
                                        <tr>
                                            <th>Post budgétaire</th>
                                            <th>N d'appt</th>
                                            <th>Cotisation Mensuel</th>
                                            <th>Recette Mensuel</th>
                                            <th>Recette Annuelle</th>
                                            <th>Pourcentage %</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                Recette de Cotisation
                                            </td>

                                            <td>
                                                {{ $budgets[0]->nbr_property }}
                                            </td>

                                            <td>
                                                {{ $budgets[0]->paies }}
                                            </td>

                                            <td>
                                                {{ $budgets[0]->paies_month }}
                                            </td>

                                            <td>
                                                {{ $budgets[0]->paies_year }}
                                            </td>

                                            <td>
                                                -
                                            </td>

                                        </tr>
                                        @foreach ($budgets as $budget)
                                            <tr>
                                                <td>
                                                    {{ $budget->service }}
                                                </td>

                                                <td>
                                                    -
                                                </td>

                                                <td>
                                                    {{ number_format($budget->cm, 2, '.', '') }}
                                                </td>

                                                <td>
                                                    {{ number_format($budget->rm, 2, '.', '') }}
                                                </td>

                                                <td>
                                                    {{ number_format($budget->ra, 2, '.', '') }}
                                                </td>

                                                <td>
                                                    {{ number_format($budget->percentage, 2, '.', '') }}%
                                                </td>

                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td>
                                                Total
                                            </td>

                                            <td>
                                                {{ $budgets[0]->nbr_property }}
                                            </td>

                                            <td>
                                                {{ $budgets[0]->paies }}
                                            </td>

                                            <td>
                                                {{ $budgets[0]->paies_month }}
                                            </td>

                                            <td>
                                                {{ $budgets[0]->paies_year }}
                                            </td>

                                            <td>
                                                {{ number_format($all_percentage, 2, '.', '') }}%
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>

                                            </td>

                                            <td>

                                            </td>

                                            <td>

                                            </td>

                                            <td>

                                            </td>

                                            <td>

                                            </td>

                                            <td>
                                                REST : {{ number_format(100 - $all_percentage, 2, '.', '') }}%
                                            </td>

                                        </tr>
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

                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditservice" type="button" class="btn btn-info">Save changes</button>
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

                $('body').on('click', '#submitEditservice', function(event) {
                    event.preventDefault()
                    var id = $("#service_id").val();
                    var name = $("#name").val();
                    var num = $("#num").val();
                    var floor = $("#floor").val();
                    var user_id = $("#user_id").val();
                    var bloc_id = $("#bloc_id").val();

                    var url = "{{ URL('service') }}" + "/" + id;

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

                $('body').on('click', '.editservice', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    console.log(id)
                    $.get('service/' + id + '/edit', function(data) {
                        console.log(data.data.id);
                        $('#service_id').val(data.data.id);
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
