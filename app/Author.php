<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public $table='authors';
    public $primaryKey='id';
    public $guarded=[];
    public $timestamps=true;
}
