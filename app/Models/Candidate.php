<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    //Un candidato tiene muchos estudios
    public function study(){
        return $this->hasMany(Study::class);
    }

    //Un candidato pertenece a un usuario
    public function user() {
        return $this->belongsTo(User::class);
    }

    //Un candidato tiene muchas experiencias
    public function experience(){
        return $this->hasMany(Experience::class);
    }

    //Un candidato tiene muchas postulaciones
    public function application(){
        return $this->hasMany(Applications::class);
    }
}
