<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    protected $fillable = [
        'name','surname',  'email', 'password','foto_perfil','foto_portada','nationality'
    ];
    //agrego el aatributo para borrado logico
    protected $date=['deleted_at'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts() {
      return $this->hasMany('App\Post');
    }
    public function comment() {
        return $this->hasMany('App\Comment');
      }
    public function nationality(){
        return $this->belongsTo('App\Nationality');
    }
}
