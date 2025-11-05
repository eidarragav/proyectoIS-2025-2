<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    //Una postulacion tiene una oferta
    public function offer(){
        return $this->belongsTo(Offer::class);
    }

    //Una postulacion tiene un candidato
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
