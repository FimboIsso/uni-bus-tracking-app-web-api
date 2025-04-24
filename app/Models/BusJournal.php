<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusJournal extends Model
{
    use HasFactory;


    protected $fillable = [
        'bus_id', 'chauffeur_id', 'depart', 'destination',
        'statut', 'heure_depart', 'heure_arrivee', 'remarques'
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

    public function chauffeur()
    {
        return $this->belongsTo(User::class, 'chauffeur_id');
    }
}
