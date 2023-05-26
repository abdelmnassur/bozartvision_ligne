<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    protected $fillable = [
        'user_id',
        'code_pays',
        'pays',
        'ville',
        'bp',
        'adresse_complet',
        /*
        'region',
        'province',
        */
    ];
    use HasFactory;
}
