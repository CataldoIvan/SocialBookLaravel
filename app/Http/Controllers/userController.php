<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{

  
   public function create()
   {
       //
   }


   public function store(Request $request)
   {
       //
   }

 
   public function show($id)
   {
       //
   }


   public function edit(Request $request)
   {
        
       $usuario=User::findOrFail($request['id']);
       $usuario->name = $request ['name'];
       $usuario->surname = $request ['surname'];
       $usuario->email= $request ['email'];
       $usuario->save();
       return redirect('/perfil');
   }

   public function update(Request $request, $id)
   {
       //
   }

  
   public function destroy($id)
   {
       //
   }
}