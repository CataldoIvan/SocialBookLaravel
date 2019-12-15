<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table='books';
    public $primaryKey='id';
    public $guarded=[];
    public $timestamps=true;

    
}
