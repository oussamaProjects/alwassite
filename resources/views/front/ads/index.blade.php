@extends('layouts.front', ['activePage' => 'home', 'titlePage' => __('ADS')])

@section('content')

    <div>
        <br>
        <br>
    </div>

    <div class="container">

        <div class="row">

            @foreach ($ads as $ad)
                <div class="col-md-3">
                    <div class="ads-info">
                        <a href="/annonce/{{ $ad->id }}">
                            <div class="images">
                                <img src="{{ url('/images/' . $ad->photos[0]->filename) }}" alt="{{ $ad->title }}"
                                    srcset="{{ url('/images/' . $ad->photos[0]->filename) }}">
                            </div>
                            <div class="title">{{ $ad->title }}</div>
                            <div class="city"><span>City :</span> {{ $ad->city->name }}</div>
                            <div class="category"><span>Category : </span>{{ $ad->category->name }}</div>
                            <div class="info">
                                <div class="superficy"><span>Superficy :</span> {{ $ad->superficy }}</div>
                                <div class="etg"><span>Etage : </span>{{ $ad->etg }}</div>
                                <div class="contrat"><span>Contrat :</span> {{ $ad->contrat }}</div>
                                <div class="balcony"><span>Balcony :</span> {{ $ad->balcony }}</div>
                                <div class="swimming_pool"><span>Swimming pool :</span> {{ $ad->swimming_pool }}</div>
                                <div class="vue"><span>Vue :</span> {{ $ad->vue }}</div>
                                <div class="car_park"><span>Car park :</span> {{ $ad->car_park }}</div>
                            </div>
                        </a>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

    </div>
    </div>

@endsection
