<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Languaje extends Model
{
    public $table='languajes';
    public $primaryKey='id';
    public $guarded=[];
    public $timestamps=true;
}
