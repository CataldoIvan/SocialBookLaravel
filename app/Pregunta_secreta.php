<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pregunta_secreta extends Model
{
    public $table='pregunta_secretas';
    public $primaryKey='id_pregunta_secreta';
    public $guarded=[];
    public $timestamps=false;

    public function mostrarPreguntas(){
        return $this->pregunta;
    }
}
