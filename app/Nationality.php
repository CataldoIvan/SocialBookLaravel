<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    public $table='nationalities';
    public $primaryKey='id';
    public $guarded=[];
    public $timestamps=true;
}
