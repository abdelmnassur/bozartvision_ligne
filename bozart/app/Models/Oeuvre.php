<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Artiste;
use App\Models\Categorie;
use App\Models\Commentaire;

class Oeuvre extends Model
{
    protected $fillable = [
        'artiste_id',
        'image',
        'titre',
        'largeur',
        'prix',
        'longeur',
        'nombre_exemplaire',
        'description',
        'categorie_id',
        'actif',
        'appreciation',
        'date_recent',
    ];
    use HasFactory;

    public function artiste(): BelongsTo {
        return $this->belongsTo(Artiste::class, 'artiste_id');
    }

    public function categorie(): BelongsTo {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }
}
