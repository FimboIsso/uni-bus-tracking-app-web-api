<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'bus_id',
        'latitude',
        'longitude',
        'captured_at',
    ];

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}

