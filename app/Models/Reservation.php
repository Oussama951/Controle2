<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut_sejour',
        'date_fin_sejour',
        'internaute_id',
        'hotel_id',
        'titre',
    ];

    public function internaute()
    {
        return $this->belongsTo(Internaute::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
