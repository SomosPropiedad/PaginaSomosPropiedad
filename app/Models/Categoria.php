<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','imagen','icono'];

    //relacion uno a muchos
    public function inmueble()
    {
        return $this->hasMany(Inmueble::class);
    }
}
