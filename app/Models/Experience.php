<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    //Una experiencia pertenece a un candidato
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
