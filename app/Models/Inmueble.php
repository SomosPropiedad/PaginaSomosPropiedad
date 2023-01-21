<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
  use HasFactory;
  protected $guarded = ['id', 'estado'];

  const BORRADOR = 1;
  const REVISION = 2;
  const PUBLICADO = 3;

  //relacion uno amuchos inversa

  public function propietario_user()
  {
    return $this->belongsTo(User::class, 'user_id');
  }

  public function categoria()
  {
    return $this->belongsTo(Categoria::class);
  }

  // relacion muchos a muchos
  public function users()
  {
    return $this->belongsToMany(User::class);
  }

  // relacion uno a muchos polimorfica
  public function imagen()
  {
    return $this->morphMany(Imagen::class, 'imageable');
  }

  //relacion uno a uno
  public function comodidades()
  {
    return $this->hasOne(Comodidades::class);
  }
}
