<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public $table='libros';
    public $primaryKey='id_libro';
    public $timesTamps='false';
    public $guarded=[];
}
