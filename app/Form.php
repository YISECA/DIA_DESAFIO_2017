<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Form extends Model

{    //
  protected $table = 'inscripciones_2017';

  public function localidades()
   {
       return $this->hasMany('App\Localidad','id_localidad');
   }

   public function actividades()
   {
       return $this->hasMany('App\Actividad','id_actividad');
   }
}






