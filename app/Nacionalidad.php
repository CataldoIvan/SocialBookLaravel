<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacionalidad extends Model
{
    public $table='nacionalidades';
    public $primaryKey='id_nacionalidad';
    public $guarded=[];
    public $timestamps=false;
}
