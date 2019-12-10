<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    public $table='comments';
    public $primarykey='id';
    public $guarded=[];
    public $timestamps=true;
    protected $date=['deleted_at'];


    public function post() {
        return $this->belongsTo('App\Post');
      }

      public function user() {
        return $this->belongsTo('App\User');
      }
}
