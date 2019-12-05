<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table='posts';
    public $primaryKey='id';
    public $guarded=[];
    public $timestamps=true;

    public function user() {
      return $this->belongsTo('App\User');
    }


}
