@extends('layouts.myaccount', ['activePage' => 'mypaiments', 'titlePage' => __('Mes annonces')])

@section('content')

    <div class="container">

        @guest
            <div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
                Vous n'êtes pas connecté, vous ne pourrez pas modifier votre annonce ultérieurement<br>
                La création d'un compte est gratuite et vous offre de nombreuses fonctionnalités
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endguest

        <div class="card bg-light">
            <h5 class="card-header">Votre annonce</h5>
            <div class="card-body">

                <div class="form-group">
                    <label>Vos photos (3 images au maximum et 3Mo pour chacune)</label>
                    <form method="post" action="{{ route('save-images') }}" enctype="multipart/form-data"
                        class="dropzone" id="my-dropzone">
                        @csrf
                        <div class="dz-message">
                            <div class="col-xs-8">
                                <div class="message">
                                    <p>Déposez vos photos ici ou cliquez</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <form method="POST" action="{{ route('ads.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="category">Catégorie</label>
                        <select class="custom-select" name="category" id="category">
                            <option disabled selected>Single Option</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="city">Cities</label>
                        <select class="custom-select" name="city" id="city">
                            <option disabled selected>Single Option</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    @include('myaccount.ads.form-group', [
                    'title' => 'Titre',
                    'type' => 'text',
                    'name' => 'title',
                    'required' => true
                    ]);

                    <div class="form-group">
                        <label for="texte">Texte</label>
                        <textarea class="form-control{{ $errors->has('texte') ? ' is-invalid' : '' }}" id="texte"
                            name="texte" rows="3" required>{{ old('texte', isset($value) ? $value : '') }}</textarea>
                        @if ($errors->has('texte'))
                            <div class="invalid-feedback">
                                {{ $errors->first('texte') }}
                            </div>
                        @endif
                    </div>

                    @include('myaccount.ads.form-group', [
                    'title' => 'superficy',
                    'type' => 'text',
                    'name' => 'superficy',
                    'required' => true
                    ]);

                    @include('myaccount.ads.form-group', [
                    'title' => 'rooms',
                    'type' => 'text',
                    'name' => 'rooms',
                    'required' => true
                    ]);

                    @include('myaccount.ads.form-group', [
                    'title' => 'etg',
                    'type' => 'text',
                    'name' => 'etg',
                    'required' => true
                    ]);


                    <div class="form-group">
                        <div class="product-labels__title">Balcony</div>
                        <label class="product-labels__item">
                            <input type="radio" class="product-labels__checkbox" name="balcony" checked value="false">
                            <span class="product-labels__txt">Non</span>
                        </label>

                        <label class="product-labels__item">
                            <input type="radio" class="product-labels__checkbox" name="balcony" value="true">
                            <span class="product-labels__txt">Yes</span>
                        </label>
                    </div>

                    <div class="form-group">

                        <div class="product-labels__title">Swimming pool</div>
                        <label class="product-labels__item">
                            <input type="radio" class="product-labels__checkbox" name="swimming_pool" checked value="false">
                            <span class="product-labels__txt">Non</span>
                        </label>

                        <label class="product-labels__item">
                            <input type="radio" class="product-labels__checkbox" name="swimming_pool" value="true">
                            <span class="product-labels__txt">Yes</span>
                        </label>
                    </div>


                    <div class="form-group">

                        <div class="product-labels__title">Car park</div>
                        <label class="product-labels__item">
                            <input type="radio" class="product-labels__checkbox" name="car_park" checked value="false">
                            <span class="product-labels__txt">Non</span>
                        </label>

                        <label class="product-labels__item">
                            <input type="radio" class="product-labels__checkbox" name="car_park" value="true">
                            <span class="product-labels__txt">Yes</span>
                        </label>
                    </div>

                    <div class="form-group">
                        <select id="input-vue" name="vue" class="form-control">
                            <option disabled selected>La vue</option>
                            <option value="no"> Non</option>
                            <option value="sea"> Mêre</option>
                        </select>
                    </div>

                    @include('myaccount.ads.form-group', [
                    'title' => 'condition',
                    'type' => 'text',
                    'name' => 'condition',
                    'required' => true
                    ]);

                    <div class="card">
                        <h5 class="card-header">Votre localisation</h5>
                        <div class="card-body">
                            {{-- <div class="form-group">
                                <label for="region">Région</label>
                                <select class="custom-select" name="region" id="region">
                                    @foreach ($regions as $region)
                                        <option data-code="{{ $region->code }}" value="{{ $region->id }}"
                                            @if ($loop->first) selected @endif>{{ $region->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}

                            <div class="form-group">
                                <label for="departement">Département</label>
                                <select class="custom-select" name="departement" id="departement"></select>
                            </div>

                            <div class="form-group">
                                <label for="commune">Commune</label>
                                <select class="custom-select" name="commune" id="commune">
                                    <option value="0"> Quartier</option>
                                    <option value="achakar"> Achakar</option>
                                    <option value="autres"> Autres</option>
                                    <option value="bella-vista"> Bella vista</option>
                                    <option value="boubana"> Boubana</option>
                                    <option value="branes"> Branes</option>
                                    <option value="californie"> Californie</option>
                                    <option value="casabarata"> Casabarata</option>
                                    <option value="castilla"> Castilla</option>
                                    <option value="centre-ville"> Centre ville</option>
                                    <option value="gzenaya"> Gzenaya</option>
                                    <option value="iberia-tanger"> Iberia</option>
                                    <option value="jbel-kbir"> Jbel kbir</option>
                                    <option value="jebilat"> Jebilat</option>
                                    <option value="kasbah"> Kasbah</option>
                                    <option value="malabata"> Malabata</option>
                                    <option value="marschan"> Marschan</option>
                                    <option value="medina-tanger"> Medina</option>
                                    <option value="moujaheddine"> Moujaheddine</option>
                                    <option value="nejma"> Nejma</option>
                                    <option value="nuinuiche"> Nuinuiche</option>
                                    <option value="playa"> Playa</option>
                                    <option value="plaza-toro"> Plaza Toro</option>
                                    <option value="quartier-administratif"> Quartier administratif</option>
                                    <option value="route-de-rabat"> Route de Rabat</option>
                                    <option value="route-de-tetouan"> Route de Tétouan</option>
                                    <option value="route-kser-sghir"> Route Ksar sghir</option>
                                    <option value="tanga-balia"> Tanga balia</option>
                                    <option value="val-fleuri"> Val fleuri</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <br>

                    @guest
                        <div class="card">
                            <h5 class="card-header">Votre identité</h5>
                            <div class="card-body">

                                @include('partials.form-group', [
                                'title' => 'Pseudo',
                                'type' => 'text',
                                'name' => 'pseudo',
                                'required' => true,
                                ])

                                @include('partials.form-group', [
                                'title' => 'Email',
                                'type' => 'email',
                                'name' => 'email',
                                'required' => true,
                                ])

                            </div>
                        </div>
                    @endguest

                    <br>

                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>

                <div id="preview" style="display: none;">
                    <div class="dz-preview dz-file-preview">
                        <div class="dz-image"><img data-dz-thumbnail /></div>
                        <div class="dz-details">
                            <div class="dz-size"><span data-dz-size></span></div>
                            <div class="dz-filename"><span data-dz-name></span></div>
                        </div>
                        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                        <div class="dz-error-message"><span data-dz-errormessage></span></div>
                        <div class="dz-success-mark">
                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <title>Check</title>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                    sketch:type="MSPage">
                                    <path
                                        d="M23.5,31.8431458 L17.5852419,25.9283877 C16.0248253,24.3679711 13.4910294,24.366835 11.9289322,25.9289322 C10.3700136,27.4878508 10.3665912,30.0234455 11.9283877,31.5852419 L20.4147581,40.0716123 C20.5133999,40.1702541 20.6159315,40.2626649 20.7218615,40.3488435 C22.2835669,41.8725651 24.794234,41.8626202 26.3461564,40.3106978 L43.3106978,23.3461564 C44.8771021,21.7797521 44.8758057,19.2483887 43.3137085,17.6862915 C41.7547899,16.1273729 39.2176035,16.1255422 37.6538436,17.6893022 L23.5,31.8431458 Z M27,53 C41.3594035,53 53,41.3594035 53,27 C53,12.6405965 41.3594035,1 27,1 C12.6405965,1 1,12.6405965 1,27 C1,41.3594035 12.6405965,53 27,53 Z"
                                        id="Oval-2" stroke-opacity="0.198794158" stroke="#747474" fill-opacity="0.816519475"
                                        fill="#FFFFFF" sketch:type="MSShapeGroup"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="dz-error-mark">
                            <svg width="54px" height="54px" viewBox="0 0 54 54" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <title>Erreur</title>
                                <defs></defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                    sketch:type="MSPage">
                                    <g id="Check-+-Oval-2" sketch:type="MSLayerGroup" stroke="#747474"
                                        stroke-opacity="0.198794158" fill="#FFFFFF" fill-opacity="0.816519475">
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
                                                @foreach ($ad->photos() as $photo)
                                                    {{ $photo->filename }}
                                                @endforeach
                                            </td>

                                            <td>
                                                {{ $ad->created_at->toDayDateTimeString() }}
                                            </td>

                                            <td class="td-actions text-right">
                                                <a class="editProject" rel="tooltip" class="btn btn-success btn-link"
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

    @endsection

    @push('js')
        <script>
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
