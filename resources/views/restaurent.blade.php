@extends('layouts.client')

@section('content')
    <style>
        #link-3 {
            background: rgb(1, 173, 30);
            text: white;
        }
    </style>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{ asset('images/re1.jpg') }}" class="d-block w-100 img" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/re2.jpg') }}" class="d-block w-100 img" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/re3.jpg') }}" class="d-block w-100 img" alt="...">

            </div>
        </div>
        <!-- Contrôles du carrousel -->

        <div class="carousel-content position-absolute top-0 start-0 w-100 text-center ">
            <div class="row mx-5">
                <div style="height: 400px"
                    class="justify-content-center align-items-center col-md-3 col-12 bg-blur shadow rounded-4 mt-5 m-4  text-white ">
                    <div class="">
                        <h5 class="display-4 m-3">Restaurant Sopera </h5>
                        <p>Savourez une cuisine musulmane authentique, fusionnant les saveurs locales et internationales
                            pour un voyage culinaire unique.</p>
                        <button class=" btn btn-a text-white m-3 p-3 rounded-5">
                            Plus d'information
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="container">


        <h1 class="mb-5 mt-5">Notre Restaurant Soupera Milomboko</h1>

        <div class="row">
            @foreach ($plats as $plat)
                <div class="col-md-6 mb-4">
                    <div class="card h-100 border-0  shadow rounded-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img style="  height: 250px;
                                width: 100%;
                                object-fit: cover;"
                                    src="{{ asset('assets/img/plat/' . $plat->image_principale) }}"
                                    class="img-fluid rounded-start" alt="{{ $plat->nom }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $plat->nom }}</h5>
                                    <p class="card-text">{{ $plat->description }}</p>
                                    <p class="card-text"><strong>Prix : {{ $plat->prix }} Ar</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
