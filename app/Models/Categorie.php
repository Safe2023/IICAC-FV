<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
    public function galeries()
    {
        return $this->hasMany(Galerie::class);
    }
}
