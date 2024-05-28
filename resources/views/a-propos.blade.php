@extends('layouts.client')

@section('content')
    <style>
        #link-4 {
            background: rgb(1, 173, 30)
        }
    </style>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="{{ asset('images/ch1.jpg') }}" class="d-block w-100 img" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/re2.jpg') }}" class="d-block w-100 img" alt="...">

            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="{{ asset('images/ma1.jpeg') }}" class="d-block w-100 img" alt="...">

            </div>
        </div>
        <!-- Contrôles du carrousel -->

        <div class="carousel-content position-absolute top-0 start-0 w-100 text-center">
            <div class="row mx-5">
                <div style="height: 400px"
                    class="justify-content-center align-items-center col-md-3 col-12 bg-blur shadow rounded-4 mt-5 m-4  text-white ">
                    <div class="">
                        <h5 class="display-4 m-3">Souper Hôtel</h5>
                        <p>Some representative placeholder content for the first slide.voluptates Daoud code,
                            delectus similique autem nulla laboriosam? Unde, atque!</p>
                        <button class=" btn btn-a text-white m-3 p-3 rounded-5">
                            Plus d'information
                        </button>
                    </div>

                </div>

            </div>
        </div>

        <div class="container mt-5">


            <!-- Header Section -->
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4">À propos de Sopera Milomboko</h1>
                    <p class="lead">Bienvenue à Sopera Milomboko, où la tradition rencontre le confortabilite.</p>
                </div>
            </div>

            <!-- History Section -->
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="{{ asset('images/ch1.jpg') }}" class="img-fluid rounded" alt="Image de l'hôtel et restaurant">
                </div>
                <div class="col-md-6">
                    <h2>Notre Histoire</h2>
                    <p>Sopera Milomboko a été fondé en [année de fondation] avec pour mission d'offrir une expérience
                        culinaire et hôtelière unique, alliant les traditions locales et les commodités modernes. Situé au
                        cœur de [ville/localité], notre établissement est l'endroit idéal pour se détendre et profiter de
                        tout ce que la région a à offrir.</p>
                </div>
            </div>

            <!-- Services Section -->
            <div class="row mt-4">
                <div class="col-12">
                    <h2>Nos Services</h2>
                    <ul class="unstailed">
                        <li>Chambres confortables et bien équipées</li>
                        <li>Restaurant offrant une cuisine locale </li>
                        <li>Wi-Fi gratuit</li>
                        <li>Service de navette</li>
                    </ul>
                </div>
            </div>

            <!-- Team Section -->
            <div class="row mt-4">
                <div class="col-12">
                    <h2>Notre Équipe</h2>
                    <p>Notre équipe dévouée est là pour vous assurer un séjour inoubliable. De nos chefs talentueux à notre
                        personnel de service attentionné, nous nous efforçons de dépasser vos attentes à chaque visite.</p>
                </div>
            </div>



            <!-- Gallery Section -->
            <div class="row mt-4">
                <div class="col-12">
                    <h2>Galerie de photos</h2>
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('images/ma1.jpeg') }}" class="img-fluid rounded mb-3" alt="Photo 1">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/ma1.jpeg') }}" class="img-fluid rounded mb-3" alt="Photo 2">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/ma1.jpeg') }}" class="img-fluid rounded mb-3" alt="Photo 3">
                        </div>
                    </div>
                </div>
            </div>




            <!-- Contact Section -->
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <h2>Contactez-nous</h2>
                    <p>Pour plus d'informations ou pour faire une réservation, veuillez nous contacter au <strong>[numéro de
                            téléphone]</strong> ou par email à <strong>[adresse email]</strong>.</p>
                </div>
            </div>
        </div>
    @endsection
