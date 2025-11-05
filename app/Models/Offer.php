<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model


{
    use HasFactory;
    //Una oferta pertenece a una empresa
    public function company(){
        return $this->belongsTo(Company::class);
    }

    //Una oferta tiene muchas postulaciones
    public function application(){
        return $this->hasMany(Application::class);
    }
}
