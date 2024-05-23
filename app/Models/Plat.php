<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Plat
 *
 * @property $id
 * @property $nom
 * @property $description
 * @property $prix
 * @property $image_principale
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Plat extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'description', 'prix', 'image_principale'];



}
