<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Artiste;
use App\Models\User;
use App\Models\Oeuvre;



class Artiste extends Model
{
    protected $fillable = [
        'user_id',
        'logo',
        'biographie',
        'page_facebook',
        'page_twitter',
        'page_instagram',
        'numero_whatsapp',
    ];
    use HasFactory;

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
