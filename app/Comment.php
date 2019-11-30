<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    public $table='comments';
    public $primarykey='id';
    public $guarded=[];
    public $timestamps=true;
}
