<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguidor extends Model
{
    public $table='seguidores';
    public $primaryKey='id_seguidor';
    public $guarded=[];
    public $timestamps=false;
}
