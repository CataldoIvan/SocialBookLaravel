<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    public $table='editorials';
    public $primaryKey='id';
    public $guarded=[];
    public $timestamps=true;
}
