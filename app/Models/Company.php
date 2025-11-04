<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    //Una compañía tiene muchos usuarios
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    //Una Empresa tienen muchas ofertas
    public function offer(){
        return $this->haveMany(Offer::class);
    }
}
