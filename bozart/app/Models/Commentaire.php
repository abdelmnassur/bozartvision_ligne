<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\Oeuvre;
use App\Models\Commentaire;

class Commentaire extends Model
{
    protected $fillable = [
        'user_id',
        'oeuvre_id',
        'commentaire',
        'actif',
    ];
    use HasFactory;

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function oeuvre(): BelongsTo 
    {
        return $this->belongsTo(Oeuvre::class, 'oeuvre_id');
    }
}
