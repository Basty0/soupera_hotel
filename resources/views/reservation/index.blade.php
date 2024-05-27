@extends('layouts.appo')

@section('template_title')
    Reservation
@endsection
<style>
    #rsrve {
        background: rgb(1, 173, 30)
    }
</style>
@section('content')
    <div class="row m-2" style="display: flex; justify-content: center; align-items: center;">
        @foreach ($chambre as $chambr)
            <div class="col col-md-3 col-5 p-3  bg-white border m-2 rounded-3">
                <div class="row mb-2 px-2">
                    <div class="col text-center bg-gradient-primary border rounded-3 ">
                        <i class="fs-1 text-white">{{ $chambr->num }}</i>
                    </div>
                    <div class="col">
                        <p>{{ $chambr->type->nom }}</p>
                        <p>Capacité {{ $chambr->type->capacite }}</p>

                    </div>
                </div>
                <div class="row p-2">
                    <div class="col text-center">
                        <a class="bg-gradient-dark rounded-5  px-3 py-2 text-white"
                            href="{{ route('reservation.createE', ['id' => $chambr->id]) }}"> Engager</a>
                    </div>
                    <div class="col text-center">
                        <a class="bg-white border rounded-5  px-3 py-2"
                            href="{{ route('reservation.createP', ['id' => $chambr->id]) }}"> Passent</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success m-4">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="">

        <div class="row mt-3 bg-gradient-dark rounded-pill border p-1">

            <a class="bg-gradient-secondary  py-2 px-2 rounded-pill ml-2 text-center fs-2 text-black">Les réservations </a>

        </div>
    </div>
    <div class="row   mt-3 mb-3 ">
        <div id="contenuA" class=" mt-3  ">
            <h4>Liste des réservations en cour</h4>

            <div>
                <table class="table  bg-white text-center text-center border rounded-3">
                    <thead class="">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Chambre</th>
                            <th scope="col">Design</th>
                            <th scope="col">Entrer</th>
                            <th scope="col">Sortie</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>
                                    <div class="dropdown">
                                        <a class=" " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li><a class="dropdown-item "
                                                    @if ($reservation->designation === 'Passent') href="{{ route('reservation.editP', $reservation->id) }}"> <i
                                                            class="bi bi-pen"></i></i> Modifier</a>
                                                    @else
                                                    href="{{ route('reservation.editE', $reservation->id) }}"> <i
                                                    class="bi bi-pen"></i></i> Modifier</a> @endif
                                                    </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('reservations.show', $reservation->id) }}"><i
                                                        class="fa fa-fw fa-eye"></i> Plus</a>
                                            </li>
                                            <li>
                                                <form action="{{ route('reservations.destroy', $reservation->id) }}"
                                                    method="POST">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item"><i
                                                            class="fa fa-fw fa-trash"></i> suprimer</button>
                                                </form>
                                            </li>
                                            <hr class="dropdown-divider">
                                            <li>
                                                <form action="{{ route('reservation.fin', ['id' => $reservation->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary dropdown-item">Terminer la
                                                        réservation</button>
                                                </form>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Obsérvation</a></li>
                                        </ul>
                                    </div>
                                </td>
                                <td>{{ $reservation->chambre->num }}</td>
                                @if ($reservation->designation === 'Passent')
                                    <td class="bg-gradient-dark p-2 rounded-5 text-white">
                                        {{ $reservation->designation }}</td>
                                @else
                                    <td class="bg-gradient-success rounded-5 p-2 text-white">
                                        {{ $reservation->designation }}</td>
                                @endif
                                @if ($reservation->designation === 'Passent')
                                    <td>{{ $reservation->heure_entrer }}</td>
                                @else
                                    <td>{{ $reservation->date_arrivee }}</td>
                                @endif
                                @if ($reservation->designation === 'Passent')
                                    <td>{{ $reservation->heure_sortie }}</td>
                                @else
                                    <td>{{ $reservation->date_depart }}</td>
                                @endif
                                <td>{{ $reservation->tarif }} Ar</td>
                                <td>{{ $reservation->created_at }} Ar</td>
                            </tr>
                        @endforeach
                        <!-- Ajoutez d'autres lignes pour plus de chambres -->
                    </tbody>
                </table>
            </div>
            {!! $reservations->links('pagination::bootstrap-5') !!}
        </div>

        <!-- Contenu B (initialement caché) -->
        <div id="contenuB" class="mt-3  ">
            <h4>Liste des réservations finie</h4>

            <div>
                <table class="table bg-white  text-center border rounded-3">
                    <thead class="">
                        <tr>
                            <th scope="col">Chambre</th>
                            <th scope="col">Design</th>
                            <th scope="col">Entrer</th>
                            <th scope="col">Sortie</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservationss as $reservation)
                            <tr>
                                <td>{{ $reservation->chambre->num }}</td>
                                @if ($reservation->designation === 'Passent')
                                    <td class="bg-gradient-dark p-2 rounded-5 text-white">
                                        {{ $reservation->designation }}</td>
                                @else
                                    <td class="bg-gradient-danger rounded-5 p-2 text-white">
                                        {{ $reservation->designation }}</td>
                                @endif
                                @if ($reservation->designation === 'Passent')
                                    <td>{{ $reservation->heure_entrer }}</td>
                                @else
                                    <td>{{ $reservation->date_arrivee }}</td>
                                @endif
                                @if ($reservation->designation === 'Passent')
                                    <td>{{ $reservation->heure_sortie }}</td>
                                @else
                                    <td>{{ $reservation->date_depart }}</td>
                                @endif
                                <td>{{ $reservation->tarif }} Ar</td>
                                <td>{{ $reservation->chambre->updated_at }}</td>
                            </tr>
                        @endforeach
                        <!-- Ajoutez d'autres lignes pour plus de chambres -->
                    </tbody>


                </table>

            </div>
            {!! $reservationss->links('pagination::bootstrap-5') !!}
        </div>
    </div>



    </div>

    </div>
    </div>
    </div>








    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Toggle Content with Bootstrap Buttons</title>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        {{-- <script>
            $(document).ready(function() {
                // Cacher initialement le contenu B
                $("#contenuB").hide();

                // Événement du bouton pour afficher le contenu A et cacher le contenu B
                $("#afficherA").click(function() {
                    $("#contenuA").show();
                    $("#contenuB").hide();
                });

                // Événement du bouton pour afficher le contenu B et cacher le contenu A
                $("#afficherB").click(function() {
                    $("#contenuB").show();
                    $("#contenuA").hide();
                });
            });
        </script> --}}
    @endsection
