<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public $table= "usuarios";
    public $primaryKey= "id_usuario";
    public $timestamps=false;
    public $guarded=[];

    public function getNombreCompleto(){
        return $this->nombre. " ".  $this->apellido ;
    }
}
