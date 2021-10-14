@extends('layouts.app', ['activePage' => 'ads', 'titlePage' => __('Manage ads')])

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">{{ __('Add ad') }}</h4>
                            <p class="card-category">{{ __('ads information') }}</p>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-12">
                                    <form method="post" action="{{ route('save-images') }}" enctype="multipart/form-data"
                                        class="dropzone" id="my-dropzone">
                                        @csrf
                                        <label>Vos photos (3 images au maximum et 3Mo pour chacune)</label>

                                        <div class="dz-message">
                                            <div class="col-xs-8">
                                                <div class="message">
                                                    <p>Déposez vos photos ici ou cliquez</p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <form method="post" action="{{ route('ads.store') }}" autocomplete="off" class="form-horizontal">
                        @csrf

                        <div class="card">

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

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input class="form-control" name="title" id="input-title" type="text"
                                                placeholder="{{ __('Title') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-category" name="category" class="form-control">
                                                <option disabled selected>Catégorien</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select id="input-city_id" class="form-control" name="city">
                                                <option disabled selected>Cities</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea name="texte" id="input-text" cols="30" rows="10"
                                                class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" name="superficy" id="input-superficy" type="text"
                                                placeholder="{{ __('Superficy') }}" required="true"
                                                aria-required="true" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" name="rooms" id="input-rooms" type="text"
                                                placeholder="{{ __('Rooms') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" name="etg" id="input-etg" type="text"
                                                placeholder="{{ __('Etg') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <input class="form-control" name="contrat" id="input-contrat" type="text"
                                                placeholder="{{ __('Contrat') }}" required="true" aria-required="true" />
                                        </div>
                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <div class="product-labels__title">Balcony</div>
                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="balcony" checked
                                                    value="false">
                                                <span class="product-labels__txt">Non</span>
                                            </label>

                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="balcony"
                                                    value="true">
                                                <span class="product-labels__txt">Yes</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">

                                            <div class="product-labels__title">Swimming pool</div>
                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="swimming_pool"
                                                    checked value="false">
                                                <span class="product-labels__txt">Non</span>
                                            </label>

                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="swimming_pool"
                                                    value="true">
                                                <span class="product-labels__txt">Yes</span>
                                            </label>
                                        </div>
                                    </div>


                                    <div class="col-sm-3">
                                        <div class="form-group">

                                            <div class="product-labels__title">Car park</div>
                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="car_park" checked
                                                    value="false">
                                                <span class="product-labels__txt">Non</span>
                                            </label>

                                            <label class="product-labels__item">
                                                <input type="radio" class="product-labels__checkbox" name="car_park"
                                                    value="true">
                                                <span class="product-labels__txt">Yes</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <select id="input-vue" name="vue" class="form-control">
                                                <option disabled selected>La vue</option>
                                                <option value="no"> Non</option>
                                                <option value="sea"> Mêre</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">

                                            <file-uploader :max="1" collection="avatars"
                                                :tokens="{{ json_encode(old('media', [])) }}" label="Upload Avatar"
                                                notes="Supported types: jpeg, png, jpg, gif"
                                                accept="image/jpeg,image/png,image/jpg,image/gif"></file-uploader>

                                        </div>
                                    </div>
                                </div>

                                <div id="preview" style="display: none;">
                                    <div class="dz-preview dz-file-preview">
                                        <div class="dz-image"><img data-dz-thumbnail /></div>
                                        <div class="dz-details">
                                            <div class="dz-size"><span data-dz-size></span></div>
                                            <div class="dz-filename"><span data-dz-name></span></div>
                                        </div>
                                        <div class="dz-progress"><span class="dz-upload"
                                                data-dz-uploadprogress></span></div>
                                        <div class="dz-error-message"><span data-dz-errormessage></span></div>
                                        <div class="dz-success-mark">
                                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                <title>Check</title>
                                                <defs></defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd" sketch:type="MSPage">
                                                    <path
                                                        d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                                        id="Oval-2" stroke-opacity="0.198794158" stroke="#747474"
                                                        fill-opacity="0.816519475" fill="#FFFFFF"
                                                        sketch:type="MSShapeGroup"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="dz-error-mark">
                                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                                <title>Erreur</title>
                                                <defs></defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd" sketch:type="MSPage">
                                                    <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474"
                                                        stroke-opacity="0.198794158" fill="#FFFFFF"
                                                        fill-opacity="0.816519475">
                                                        <path
                                                            d="M32.6568542,29 L38.3106978,23.3461564 C39.8771021,21.7797521 39.8758057,19.2483887 38.3137085,17.6862915 C36.7547899,16.1273729 34.2176035,16.1255422 32.6538436,17.6893022 L27,23.3431458 L21.3461564,17.6893022 C19.7823965,16.1255422 17.2452101,16.1273729 15.6862915,17.6862915 C14.1241943,19.2483887 14.1228979,21.7797521 15.6893022,23.3461564 L21.3431458,29 L15.6893022,34.6538436 C14.1228979,36.2202479 14.1241943,38.7516113 15.6862915,40.3137085 C17.2452101,41.8726271 19.7823965,41.8744578 21.3461564,40.3106978 L27,34.6568542 L32.6538436,40.3106978 C34.2176035,41.8744578 36.7547899,41.8726271 38.3137085,40.3137085 C39.8758057,38.7516113 39.8771021,36.2202479 38.3106978,34.6538436 L32.6568542,29 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                                            id="Oval-2" sketch:type="MSShapeGroup"></path>
                                                    </g>
                                                </g>
                                            </svg>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title ">ads</h4>
                            <p class="card-category"> Here you can manage ads</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-info">
                                        <tr>

                                            <th>
                                                Title
                                            </th>

                                            <th>
                                                City
                                            </th>

                                            <th>
                                                Category
                                            </th>

                                            <th>
                                                user
                                            </th>

                                            <th>
                                                superficy
                                            </th>

                                            <th>
                                                etg
                                            </th>

                                            <th>
                                                contrat
                                            </th>

                                            <th>
                                                balcony
                                            </th>

                                            <th>
                                                swimming_pool
                                            </th>

                                            <th>
                                                vue
                                            </th>

                                            <th>
                                                car_park
                                            </th>

                                            <th>
                                                Email
                                            </th>

                                            <th>
                                                Active
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
                                        @foreach ($ads as $ad)
                                            <tr>

                                                <td>
                                                    {{ $ad->title }}
                                                </td>

                                                <td>
                                                    {{ $ad->city->name }}
                                                </td>

                                                <td>
                                                    {{ $ad->category->name }}
                                                </td>

                                                <td>
                                                    {{ $ad->user->nom }}
                                                </td>

                                                <td>
                                                    {{ $ad->email }}
                                                </td>

                                                <td>
                                                    {{ $ad->superficy }}
                                                </td>

                                                <td>
                                                    {{ $ad->etg }}
                                                </td>

                                                <td>
                                                    {{ $ad->contrat }}
                                                </td>

                                                <td>
                                                    {{ $ad->balcony }}
                                                </td>

                                                <td>
                                                    {{ $ad->swimming_pool }}
                                                </td>

                                                <td>
                                                    {{ $ad->vue }}
                                                </td>

                                                <td>
                                                    {{ $ad->car_park }}
                                                </td>

                                                <td>
                                                    {{ $ad->email }}
                                                </td>

                                                <td>
                                                    {{ $ad->active }}
                                                </td>

                                                <td>
                                                    {{ $ad->created_at->toDayDateTimeString() }}
                                                </td>

                                                <td class="td-actions text-right">
                                                    <a class="editProject" rel="tooltip"
                                                        class="btn btn-success btn-link"
                                                        href="{{ route('ads.edit', $ad->id) }}" data-original-title=""
                                                        title="" data-toggle="modal" data-id="{{ $ad->id }}"
                                                        data-target="#adModal">
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

    <div class="modal fade" id="adModal" tabindex="-1" role="">
        <div class="modal-dialog modal-login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit ad</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form">

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <input type="hidden" id="ad_id" name="ad_id" value="">
                                <label class="col-sm-2 col-form-label" for="name">{{ __('Name') }}</label>
                                <input class="form-control" name="name" id="name" type="text"
                                    placeholder="{{ __('Name') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="long">{{ __('Longitude') }}</label>
                                <input class="form-control" name="long" id="long" type="text"
                                    placeholder="{{ __('Longitude') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="lat">{{ __('Latitude') }}</label>
                                <input class="form-control" name="lat" id="lat" type="text"
                                    placeholder="{{ __('Latitude') }}" required="true" aria-required="true" />
                            </div>
                        </div>

                        <div class="form-group bmd-form-group">
                            <div class="input-group">
                                <label class="col-sm-2 col-form-label" for="city_id">{{ __('City') }}</label>
                                <select id="city_id" class="form-control" name="city_id">
                                    <option disabled selected>Single Option</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button id="submitEditProject" type="button" class="btn btn-info">Save changes</button>
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

                $('body').on('click', '#submitEditProject', function(event) {
                    event.preventDefault()
                    var id = $("#ad_id").val();
                    var name = $("#name").val();
                    var city_id = $("#city_id").val();
                    var long = $("#long").val();
                    var lat = $("#lat").val();

                    var url = "{{ URL('ads') }}" + "/" + id;

                    $.ajax({
                        url: url,
                        type: "PATCH",
                        cache: false,
                        data: {
                            id: id,
                            name: name,
                            city_id: city_id,
                            long: long,
                            lat: lat,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(data) {
                            window.location.reload(true);
                        }
                    });
                });

                $('body').on('click', '.editProject', function(event) {

                    event.preventDefault();
                    var id = $(this).data('id');
                    console.log(id)
                    $.get('ads/' + id + '/edit', function(data) {
                        console.log(data.data.id);
                        $('#ad_id').val(data.data.id);
                        $('#name').val(data.data.name);
                        $('#long').val(data.data.long);
                        $('#lat').val(data.data.lat);
                        $('#city_id').val(data.data.city_id);
                    })
                });

            });

            const fillSelect = (element, data) => {
                element.html('');
                data.forEach((e) => {
                    element.append($('<option>').val(e.code).text(e.nom));
                });
            }

            const fillDepartements = () => {
                $.get('https://geo.api.gouv.fr/regions/' + $('#region option:selected').attr('data-code') + '/departements',
                    function(data) {
                        fillSelect($('#departement'), data);
                        fillCommunes();
                    });
            }

            const fillCommunes = () => {
                $.get('https://geo.api.gouv.fr/departements/' + $('#departement').val() + '/communes', function(data) {
                    fillSelect($('#commune'), data);
                });
            }

            Dropzone.options.myDropzone = {
                uploadMultiple: true,
                parallelUploads: 3,
                maxFilesize: 3,
                maxFiles: 3,
                dictMaxFilesExceeded: 'Vous ne pouvez charger que 3 photos',
                previewTemplate: document.querySelector('#preview').innerHTML,
                addRemoveLinks: true,
                acceptedFiles: 'image/*',
                dictInvalidFileType: 'Type de fichier interdit',
                dictRemoveFile: 'Supprimer',
                dictFileTooBig: 'L\'image fait plus de 3 Mo',
                timeout: 10000,

                init() {

                    const myDropzone = this;

                    $.get('{{ route('server-images') }}', data => {
                        $.each(data.images, (key, value) => {
                            const mockFile = {
                                name: value.original,
                                size: value.size,
                                dataURL: '{{ url('images') }}' + '/' + value.server
                            };
                            myDropzone.files.push(mockFile);
                            myDropzone.emit("addedfile", mockFile);
                            myDropzone.createThumbnailFromUrl(mockFile,
                                myDropzone.options.thumbnailWidth,
                                myDropzone.options.thumbnailHeight,
                                myDropzone.options.thumbnailMethod, true, (thumbnail) => {
                                    myDropzone.emit('thumbnail', mockFile, thumbnail);
                                });
                            myDropzone.emit('complete', mockFile);
                        });
                    });

                    this.on("removedfile", file => {
                        $.ajax({
                            method: 'delete',
                            url: '{{ route('destroy-images') }}',
                            data: {
                                name: file.name,
                                _token: $('[name="_token"]').val()
                            }
                        });
                    });
                }
            };

            $(() => {
                fillDepartements();
                $('#region').change(() => {
                    fillDepartements();
                });
                $('#departement').change(() => {
                    fillCommunes();
                });
            })
        </script>

    @endpush

@endsection
