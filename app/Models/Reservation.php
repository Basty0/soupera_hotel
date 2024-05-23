<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DateTime;

/**
 * Class Reservation
 *
 * @property $id
 * @property $chambre_id
 * @property $date_arrivee
 * @property $date_depart
 * @property $statut
 * @property $nom_client
 * @property $cin
 * @property $telephone_client
 * @property $created_at
 * @property $updated_at
 * @property $heure_entrer
 * @property $heure_sortie
 * @property $designation
 * @property $tarif
 * @property $user_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reservation extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['chambre_id', 'date_arrivee', 'date_depart', 'statut', 'nom_client', 'cin', 'telephone_client', 'heure_entrer', 'heure_sortie', 'designation', 'tarif', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function chambre()
    {
        return $this->belongsTo(Chambre::class);
    }

    function calculerPrixTotalParHeures($heureEntree, $heureSortie, $prixParHeure)
{
    $heureEntree = new DateTime($heureEntree);
    $heureSortie = new DateTime($heureSortie);

    // Calculer la différence entre les deux heures
    $diff = $heureSortie->diff($heureEntree);

    // Nombre total d'heures
    $nombreHeures = $diff->h;

    // Calculer le prix total
    $prixTotal = $nombreHeures * $prixParHeure;

    return $prixTotal;
}

function calculerPrixTotalParJours($dateEntree, $dateSortie, $prixParJour)
{
    $dateEntree = new DateTime($dateEntree);
    $dateSortie = new DateTime($dateSortie);

    // Calculer la différence entre les deux dates
    $diff = $dateSortie->diff($dateEntree);

    // Nombre total de jours
    $nombreJours = $diff->days;

    // Calculer le prix total
    $prixTotal = $nombreJours * $prixParJour;

    return $prixTotal;
}

}