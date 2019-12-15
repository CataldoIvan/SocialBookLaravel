<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{

  



   public function edit(Request $request)
   {
        
       $usuario=User::findOrFail($request['id']);
       $usuario->name = $request ['name'];
       $usuario->surname = $request ['surname'];
       $usuario->email= $request ['email'];
       $usuario->save();
       return redirect('/perfil');
   }

  
   public function destroy(Request $id)
   {
    $usuario=User::find($id->userid);
    
    $usuario->delete();
    
    return redirect('inicio');
           


   }
   //creo la funcion para controlar el guardado de la imagen
   public function agregarFoto(Request $request){

    $usuario=User::findOrFail($request->id);
  
    $ruta=$request->file('foto_perfil')->store("public");
    $nombreArchivo=basename($ruta);
    $usuario->foto_perfil=$nombreArchivo;
    $usuario->save();
    return redirect('/muro');
 }
}
