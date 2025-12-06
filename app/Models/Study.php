<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;

    //Un estudio pertenece a un candidato
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
