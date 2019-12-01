<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class userController extends Controller
{
    public function index()
    {
       

       
     return view("userPrueba");
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request, $id)
    {         
        return view('userPrueba',compact('request','id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
