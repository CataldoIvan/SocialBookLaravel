<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    public $table='idiomas';
    public $primaryKey='id_idioma';
    public $guarded=[];
    public $timestamps=false;
}
