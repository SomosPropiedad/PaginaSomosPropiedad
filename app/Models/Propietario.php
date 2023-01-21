<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    protected $guarded = ['id','estado','created_at', 'updated_at'];

    const ACTIVO = 1;
    const INACTIVO = 2;


    //relacion uno a uno inversa

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //relacion atraves de 

    public function inmuebles()
    {
        return $this->hasManyThrough(Inmueble::class, User::class);
    }


    //relacion uno a muchos
    public function inmueble()
    {
        return $this->hasMany(Inmueble::class);
    }
}
