<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Pregunta_secreta;

class RegistracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas=Pregunta_secreta::all();

       
     return view("registracion",compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valido si las contrasenias son iguales
        if($request['contrasenia']== $request['contraseniaConfirmada']){
            $reglas=[
                "nombre"=> "required|string|min:3|max:20 ",
                "apellido"=> "required|string|min:3|max:20 ",
                "usuario"=> "required|string|min:3|max:20",
                "contrasenia" => "required|string|min:3|max:20 ",
                "respuesta_secreta"=>"required|string|min:3|max:20 ",
    
            ];
            $mensajes=[
                "nombre.required"=>"El nombre debe tener al menos 4 letras y no mas de 20",
                "apellido.required"=>"El apellido debe tener al menos 4 letras y no mas de 20",
                "usuario.required"=>" debe ser un corrreo electronico",
                "contrasenia.min"=>"las contrasenias deben ser mayor a 4 caracteres y menores a 20",
                "respuesta_secreta.required"=> "la respuesta debe tener al menos 4 letras y no mas de 20",
            ];
        }else{ 
            $reglas=[
                "nombre"=> "required|string|min:3|max:20 ",
                "apellido"=> "required|string|min:3|max:20 ",
                "usuario"=> "required|string|min:3|max:20",
     //si las contrasenias no son iguales pido cualquier cosa para que de error y vuelva al formulario
                "contrasenia" => "required|boolean ",
                "respuesta_secreta"=>"required|string|min:3|max:20 ",
    
            ];
            $mensajes=[
                "nombre.required"=>"El nombre debe tener al menos 4 letras y no mas de 20",
                "apellido.required"=>"El apellido debe tener al menos 4 letras y no mas de 20",
                "usuario.required"=>" debe ser un corrreo electronico",
                "contrasenia.boolean"=>"las contrasenias deben coincidir",
                "respuesta_secreta.required"=> "la respuesta debe tener al menos 4 letras y no mas de 20",
            ];

        }
        


        $this->validate($request,$reglas,$mensajes);

        $nuevoUsuario=new usuario();
        $nuevoUsuario->nombre=$request['nombre'];
        $nuevoUsuario->apellido=$request['apellido'];
        $nuevoUsuario->usuario=$request['usuario'];
        $nuevoUsuario->contrasenia=$request['contrasenia'];
        $nuevoUsuario->pregunta_secretas_id=$request['pregunta'];
        $nuevoUsuario->respuesta_secreta=$request['respuesta_secreta'];
        $nuevoUsuario->save();
        return redirect("/home");
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
        //
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
}
