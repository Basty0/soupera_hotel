<!-- resources/views/chambres.blade.php -->

@extends('layouts.client')

@section('content')
    <style>
        #link-2 {
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

        <div class="carousel-content position-absolute top-0 start-0 w-100 text-center ">
            <div class="row mx-5">
                <div style="height: 400px"
                    class="justify-content-center align-items-center col-md-3 col-12 bg-blur shadow rounded-4 mt-5 m-4  text-white ">
                    <div class="">
                        <h5 class="display-4 m-3">Sopera Hôtel</h5>
                        <p>Profitez de nos chambres doubles confortables, équipées de toutes les commodités modernes pour
                            assurer votre bien-être et votre détente.</p>
                        <button class=" btn btn-a text-white m-3 p-3 rounded-5">
                            Plus d'information
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="container mt-5 ">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        <h1 class="mt-5 text-center">Nos Types de Chambres</h1>


        @foreach ($types as $type)
            <div class="row p-2 rounded-3 bg-white my-5 shadow">
                <div class="col-md-6 col-12 bg-blur rounded-5">
                    <div class="row d-flex">
                        @foreach ($type->chambres as $chambre)
                            <img data-aos="zoom-in-up" data-aos-duration="1000" class=" my-2"
                                style="width: 250px; object-fit: cover;"
                                src="{{ asset('assets/img/chambres/' . $chambre->image_principale) }}" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="col-md-5 col-12 p-3" data-aos="zoom-in-up">
                    <h1>{{ $type->nom }}</h1>
                    <p>{{ $type->description }}</p>
                    <div class="text-center">
                        <!-- Bouton pour ouvrir la modal -->
                        <button class="btn rounded-5 p-3 btn-a text-white" data-bs-toggle="modal"
                            data-bs-target="#modalReservation{{ $type->id }}">
                            Réserver
                        </button>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modalReservation{{ $type->id }}" tabindex="-1"
                aria-labelledby="modalReservationLabel{{ $type->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalReservationLabel{{ $type->id }}">Réserver une chambre</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Formulaire de réservation -->
                            <form action="{{ route('reservation.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="type_id" value="{{ $type->id }}">
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom">
                                </div>
                                <div class="mb-3">
                                    <label for="prenom" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="telephone" class="form-label">Numéro de téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone">
                                </div>
                                <div class="mb-3">
                                    <label for="date_arrivee" class="form-label">Date d'arrivée</label>
                                    <input type="date" class="form-control" id="date_arrivee" name="date_arrivee">
                                </div>
                                <div class="mb-3">
                                    <label for="date_depart" class="form-label">Date de départ</label>
                                    <input type="date" class="form-control" id="date_depart" name="date_depart">
                                </div>
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach




    </div>
@endsection
