<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicCible extends Model
{
    use HasFactory;
     protected $fillable = ['cible'];
     public function evenements()
    {
        return $this->hasMany(Evenement::class, 'public_cible_id');
    }
}
