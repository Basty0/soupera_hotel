@extends('layouts.appo')
<style>
    #home {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <div class="container justify-content-center align-items-center p-2">


        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                <h3 class="text-white"> {{ session('error') }} <i class="bi bi-ban"></i></h3>

                <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
        @endif
        <div style="height: 300px" class="row align-items-center text-center img-bg border rounded-3 m-md-2 mx-4">
            <h1 class="">Sopera Milomboko</h1>
        </div>
        <div class="">

            <div class="row justify-content-center">
                <a href="#"
                    class="col-md-4 col-12 bg-gradient-info text-white m-2 p-5 border shadow text-center rounded-4"
                    data-bs-toggle="modal" data-bs-target="#messagesModal">
                    <span class="fs-3">Messages</span>
                    @if ($unreadMessages > 0)
                        <span class="badge rounded-pill bg-danger p-3">{{ $unreadMessages }}</span>
                    @endif
                </a>
                <a href="#"
                    class="col-md-4 col-12 bg-gradient-secondary text-white m-2 p-5 border shadow text-center rounded-4"
                    data-bs-toggle="modal" data-bs-target="#reservationsModal">
                    <span class="fs-3">Réservations</span>
                    @if ($unreadReservations > 0)
                        <span class="badge rounded-pill bg-danger p-3">{{ $unreadReservations }}</span>
                    @endif
                </a>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2 col-5 bg-white rounded-3 shadow p-3 m-2 border">
                    <h5>Reservation en cour</h5>
                    <h5>Reservation en cour</h5>
                </div>
                <div class="col-md-2 col-5 bg-white rounded-3 shadow p-3 m-2 border">
                    <h5>Reservation en cour</h5>
                    <h5>Reservation en cour</h5>
                </div>
                <div class="col-md-2 col-5 bg-white rounded-3 shadow p-3 m-2 border">
                    <h5>Reservation en cour</h5>
                    <h5>Reservation en cour</h5>
                </div>
                <div class="col-md-2 col-5 bg-white rounded-3 shadow p-3 m-2 border">
                    <h5>Reservation en cour</h5>
                    <h5>Reservation en cour</h5>
                </div>
                <div class="col-md-2 col-5 bg-white rounded-3 shadow p-3 m-2 border">
                    <h5>Reservation en cour</h5>
                    <h5>Reservation en cour</h5>
                </div>
            </div>
        </div>


        <!-- Modal pour les messages -->
        <div class="modal fade" id="messagesModal" tabindex="-1" aria-labelledby="messagesModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messagesModalLabel">Messages</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            @foreach ($messages as $message)
                                @php
                                    $backgroundClass = $message->vu === 'oui' ? 'bg-white' : 'bg-light';
                                @endphp
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center {{ $backgroundClass }}">
                                    <span>{{ substr($message->message, 0, 30) }}...</span>
                                    <span class="">{{ $message->created_at->format('d-m-Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal pour les réservations -->
        <div class="modal fade" id="reservationsModal" tabindex="-1" aria-labelledby="reservationsModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="reservationsModalLabel">Réservations</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="list-group">
                            @foreach ($reservations as $reservation)
                                @php
                                    $backgroundClass = $reservation->vu === 'oui' ? 'bg-white' : 'bg-light';
                                @endphp
                                <li
                                    class="list-group-item d-flex justify-content-between align-items-center {{ $backgroundClass }}">
                                    <span>{{ $reservation->prenom }}</span>
                                    <span class="">{{ $reservation->created_at->format('d-m-Y') }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
