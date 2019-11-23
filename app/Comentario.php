<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $table='comentarios';
    public $primaryKey='id_comentario';
    public $guarded=[];
    public $timestamps=false;
}
