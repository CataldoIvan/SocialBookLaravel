<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public $table='generos';
    public $primaryKey='id_genero';
    public $guarded=[];
    public $timestamps=false;
}
