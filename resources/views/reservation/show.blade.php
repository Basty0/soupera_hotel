@extends('layouts.appo')

<style>
    #rsrve {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <div class="">

        <div class="row justify-content-center align-items-center">
            <div class="col-md-6"> <!-- Utilisez la classe col-md-6 pour définir la largeur de la colonne -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card  border">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <h3 class="card-title ">Facture de réservation</h3>
                            </div>
                            <div class="col-md-4 col-12">
                                <a href="{{ route('reservations.index') }}"
                                    class="bg-gradient-primary py-2 text-white px-3 rounded-5">Retour aux
                                    réservations</a>

                            </div>
                        </div>

                    </div>
                    <div class="card-body border rounded-5 m-3">
                        <p><strong>Chambre:</strong> {{ $reservation->chambre->num }}</p>
                        <p><strong>Prix total:</strong> {{ $reservation->tarif }} Ar</p>

                        @if ($reservation->designation === 'Passent')
                            <p><strong>Heure d'entrée:</strong> {{ $reservation->heure_entrer }}</p>
                            <p><strong>Heure de sortie:</strong> {{ $reservation->heure_sortie }}</p>
                        @else
                            <p><strong>Date d'arrivée:</strong> {{ $reservation->date_arrivee }}</p>
                            <p><strong>Date de départ:</strong> {{ $reservation->date_depart }}</p>
                        @endif

                        <p><strong>Nom du client:</strong> {{ $reservation->nom_client }}</p>
                        <p><strong>CIN du client:</strong> {{ $reservation->cin }}</p>
                        <p><strong>Téléphone du client:</strong> {{ $reservation->telephone_client }}</p>
                        <p><strong>Statut:</strong> {{ $reservation->statut }}</p>
                        <p><strong>Date de création:</strong> {{ $reservation->created_at->format('d/m/Y H:i') }}</p>
                        <p><strong>Date de modification:</strong> {{ $reservation->updated_at->format('d/m/Y H:i') }}</p>
                        <hr>
                        <div class="row">
                            <div class="col">

                                <p><strong>Réception:</strong> {{ $reservation->user->name }}</p>
                            </div>
                            <div class="col">
                                <p><strong>FAC/</strong> {{ $reservation->id }}</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
