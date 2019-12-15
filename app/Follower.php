<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Follower extends Model
{
    use Notifiable;
    use SoftDeletes;


    protected $fillable = [
        'follower_id','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
