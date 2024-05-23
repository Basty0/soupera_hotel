<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chambre
 *
 * @property $id
 * @property $type_id
 * @property $prix_par_nuit
 * @property $disponibilite
 * @property $image_principale
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chambre extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_id', 'prix_par_nuit','prix_par_heure','num', 'disponibilite', 'image_principale'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}