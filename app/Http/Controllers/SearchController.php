<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class SearchController extends Controller
{
    public function search(Request $request){

        $searchinput=$request->input('search');
       // dd($searchinput);//
       // busqueda del apellido
         $searchOfUser=User::where('name','Like','%'.$searchinput.'%')->get();
         // busqueda del apellido
        $searchOfUserSurname=User::where('surname','Like','%'.$searchinput.'%')->get();
         // busqueda de libro
        $searchOfBook=Post::where('title','Like','%'.$searchinput.'%')->get();

        return view('search.result',compact('searchOfUser','searchOfUserSurname','searchOfBook'));

    }
}
