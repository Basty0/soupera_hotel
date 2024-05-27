<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;
use App\Models\Chambre;
use DateTime;

/**
 * Class ReservationController
 * @package App\Http\Controllers
 */
class ReservationController extends Controller
{

    public function finReservation($id)
    {
        // Trouver la réservation par son ID
        $reservation = Reservation::find($id);

        if (!$reservation) {
            return redirect()->back()->with('error', 'Réservation introuvable.');
        }

        // Mettre à jour le statut de la réservation
        $reservation->statut = 'fin';
        $reservation->save();

        // Mettre à jour la disponibilité de la chambre associée
        $chambre = Chambre::find($reservation->chambre_id);
        if ($chambre) {
            $chambre->disponibilite = 'disponible';
            $chambre->save();
        }

        return redirect()->route('reservations.index')->with('success', 'Réservation terminée avec succès.');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::where('statut','en_cour')->orderByDesc('id')->paginate(20);
        $reservationss = Reservation::where('statut','fin')->orderByDesc('id')->paginate(30);
        $chambre = Chambre::where('disponibilite','disponible')->get();

        return view('reservation.index', compact('reservationss','reservations','chambre'))
            ->with('i', (request()->input('page', 1) - 1) * $reservations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createE($id)
    {
        $chambre = $id;
        $reservation = new Reservation();

        return view('reservation.createEng', compact('reservation','chambre'));
    }
    public function createP($id)
    {
        $chambre = $id;
        $reservation = new Reservation();
        return view('reservation.createPas', compact('reservation','chambre'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        // Créer une nouvelle réservation en utilisant les données validées du formulaire
        $reservation = Reservation::create($request->validated());

        // Trouver la chambre associée à la réservation
        $chambre = Chambre::find($reservation->chambre_id);

        if ($chambre) {
            // Modifier la disponibilité de la chambre en 'reservee'
            $chambre->disponibilite = 'reservee';
            $chambre->save();
        }

        // Calculer le prix total en fonction de la désignation de la réservation
        $prixTotal = $this->calculerPrixTotal($reservation);

        // Mettre à jour le prix dans la réservation
        $reservation->tarif = $prixTotal;
        $reservation->save();

        // Rediriger vers la page des réservations avec un message de succès
        return redirect()->route('reservations.show',['reservation' => $reservation->id])
            ->with('success', 'Reservation created successfully.');
    }

    // Méthode privée pour calculer le prix total en fonction de la désignation de la réservation
    private function calculerPrixTotal($reservation)
    {
        if ($reservation->designation === 'Engager') {
            // Récupérer le prix par jour de la chambre
            $prixParJour = $reservation->chambre->prix_par_nuit;

            // Calculer le nombre de jours entre la date d'arrivée et la date de départ
            $dateArrivee = new DateTime($reservation->date_arrivee);
            $dateDepart = new DateTime($reservation->date_depart);
            $diff = $dateDepart->diff($dateArrivee);
            $nombreJours = $diff->days ;
            //dd($nombreJours);

            // Calculer le prix total en fonction du nombre de jours et du prix par jour
            return $nombreJours * $prixParJour;
        } else {
            // Récupérer le prix par heure de la chambre
            $prixParHeure = $reservation->chambre->prix_par_heure;

            // Calculer le nombre d'heures entre l'heure d'entrée et l'heure de sortie
            $heureEntree = new DateTime($reservation->heure_entrer);
            $heureSortie = new DateTime($reservation->heure_sortie);
            $diff = $heureSortie->diff($heureEntree);
            $nombreHeures = $diff->h;

            // Calculer le prix total en fonction du nombre d'heures et du prix par heure
            return $nombreHeures * $prixParHeure;
        }
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);

        return view('reservation.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        $chambre = $reservation->chambre_id;

        return view('reservation.edit', compact('reservation','chambre'));
    }
    public function editP($id)
    {
        $reservation = Reservation::find($id);
        $chambre = $reservation->chambre_id;

        return view('reservation.editPas', compact('reservation','chambre'));
    }
    public function editE($id)
    {
        $reservation = Reservation::find($id);
        $chambre = $reservation->chambre_id;
        return view('reservation.editEng', compact('reservation','chambre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        // Mettre à jour les attributs de la réservation avec les données validées du formulaire
        $reservation->update($request->validated());

        // Calculer le prix total en fonction de la désignation de la réservation
        $prixTotal = $this->calculerPrixTotal($reservation);

        // Mettre à jour le prix dans la réservation
        $reservation->tarif = $prixTotal;
        $reservation->save();

        // Rediriger vers la liste des réservations avec un message de succès
        return redirect()->route('reservations.index')
            ->with('success', 'Reservation updated successfully');
    }

    public function destroy($id)
    {
        Reservation::find($id)->delete();

        return redirect()->route('reservations.index')
            ->with('success', 'Reservation deleted successfully');
    }
}