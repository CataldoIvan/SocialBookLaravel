<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;
    public $table='posts';
    public $primaryKey='id';
    public $guarded=[];
    public $timestamps=true;
    protected $date=['deleted_at'];

    public function user() {
      return $this->belongsTo('App\User');
    }


}
