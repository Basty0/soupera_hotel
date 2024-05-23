<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationClient extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_id',
        'nom',
        'prenom',
        'email',
        'telephone',
        'date_arrivee',
        'date_depart',
    ];

    protected $dates = ['date_arrivee', 'date_depart'];
}