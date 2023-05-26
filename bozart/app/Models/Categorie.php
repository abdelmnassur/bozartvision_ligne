<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Artiste;
use App\Models\Oeuvre;

class Categorie extends Model
{
    protected $fillable = [
        'categorie',
    ];
    use HasFactory;

    // public function categorie() : HasMany 
    // {
    //     $this->hasMany(Oeuvre::class);
    // }
}
