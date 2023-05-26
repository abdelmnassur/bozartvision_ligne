<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'taux',
        'date_debut',
        'date_fin',
        'artiste_id',
    ];
    use HasFactory;
}
