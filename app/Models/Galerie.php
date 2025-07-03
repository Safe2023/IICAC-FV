<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    use HasFactory;
     protected $guarded = ['id'];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
