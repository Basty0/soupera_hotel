<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Type
 *
 * @property $id
 * @property $nom
 * @property $created_at
 * @property $updated_at
 * @property $description
 * @property $capacite
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Type extends Model
{


    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'description', 'capacite'];
    public function chambres()
    {
        return $this->hasMany(Chambre::class);
    }


}