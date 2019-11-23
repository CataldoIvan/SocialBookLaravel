<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    public $table='posteos';
    public $primaryKey='id_posteo';
    public $timesTamps='false';
    public $guarded=[];
}
