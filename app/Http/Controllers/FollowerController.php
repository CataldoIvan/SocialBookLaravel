<?php

namespace App\Http\Controllers;

use App\Follower;
use Illuminate\Http\Request;
use App\User;

use Auth;

class FollowerController extends Controller
{
    

    public function following($id)
    {
       
        $follow=new Follower();
        $follow-> user_id=Auth::user()->id;
        $follow-> follower_id=$id;
        $follow->save();
       return redirect('/perfil');

    }

}
