<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public $table='autores';
    public $primaryKey='id_autor';
    public $guarded=[];
    public $timestamps=false;
}
