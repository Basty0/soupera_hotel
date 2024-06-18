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
                        <h5 class="display-4 m-3">Sopera Hôtel</h5>
                        <p class="lead">Découvrez l'histoire de notre établissement familial fondé par Abdoul, et
                            laissez-vous séduire par notre passion pour l'accueil chaleureux et la cuisine raffinée.</p>
                        <button class=" btn btn-a text-white m-3 p-3 rounded-5">
                            Plus d'informations
                        </button>
                    </div>

                </div>

            </div>
        </div>

        <div class="container mt-5">


            <!-- Header Section -->
            <div class="row">
                <div class="col-12 ">
                    <h1 class="display-2">Découvrez le Charme de l'Hospitalité Malgache à Sopera Milomboko</h1>
                    <p class="lead">Bienvenue à l'Hôtel Restaurant Sopera Milomboko, un établissement familial fondé par
                        Abdoul. Situé à Antananarivo, dans le quartier 67ha Nord, nous vous offrons une expérience unique
                        alliant la chaleur de l'hospitalité malgache et le confort moderne. Notre restaurant musulman
                        propose une cuisine qui marie les saveurs locales et des touches modernes, pour satisfaire toutes
                        vos envies gastronomiques.</p>
                </div>
            </div>

            <!-- History Section -->
            <div style="margin-top: 50px" class="row ">
                <div class="col-md-6">
                    <img src="{{ asset('images/ch1.jpg') }}" class="img-fluid rounded" alt="Image de l'hôtel et restaurant">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="row mt-4">
                            <div class="col-12">
                                <h2>Un Havre de Paix au Cœur d'Antananarivo</h2>
                                <p class="lead">Chers invités, nous sommes ravis de vous accueillir à l'Hôtel Restaurant
                                    Sopera
                                    Milomboko. Que vous
                                    soyez en voyage d'affaires, en vacances ou simplement de passage, nous mettons tout en
                                    œuvre pour
                                    que votre séjour soit mémorable. Profitez de nos services de qualité et laissez-vous
                                    choyer par
                                    notre équipe dévouée. Nous espérons que vous vous sentirez ici comme chez vous..</p>
                            </div>
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
                    </div>

                </div>
            </div>

            <!-- Services Section -->


            <!-- Team Section -->
            <div class="row " style="margin-top: 50px">
                <div class="col-12">
                    <h2>Gastronomie Musulmane et Confort Moderne</h2>
                    <p class="lead">Fondé par Abdoul, l'Hôtel Restaurant Sopera Milomboko est né d'une passion pour
                        l'hospitalité et la
                        cuisine. Abdoul a voulu créer un lieu où les voyageurs pourraient se reposer et savourer de
                        délicieux repas dans un cadre accueillant et convivial. Depuis son ouverture, notre établissement a
                        su fidéliser une clientèle qui apprécie notre ambiance chaleureuse et nos prestations soignées.</p>
                </div>
            </div>



            <!-- Gallery Section -->
            <div class="row " style="margin-top: 50px">
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
            <div class="row " style="margin-top: 50px">
                <div class="col-12 ">
                    <h2>Vivez une Expérience Unique à Antananarivo</h2>
                    <p class="lead">
                        Nous espérons vous accueillir bientôt à l'Hôtel Restaurant Sopera Milomboko et vous faire découvrir
                        tout ce que notre établissement a à offrir. Que ce soit pour un séjour court ou prolongé, nous vous
                        garantissons un service irréprochable et une expérience inoubliable.
                    </p>
                    <p class="lead">Pour plus d'informations ou pour faire une réservation, veuillez nous contacter au
                        <strong>[numéro de
                            téléphone]</strong> ou par email à <strong>[adresse email]</strong>.
                    </p>
                </div>
            </div>
        </div>
    @endsection
