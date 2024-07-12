<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;

    public function partidos(){
        return $this->hasMany(Partido::class);
    }
    
    public function jugador(){
        return $this->belongsTo(Jugador::class);
    }

}
