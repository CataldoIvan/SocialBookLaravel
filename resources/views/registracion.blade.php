@extends('plantillaPreLogin')

@section('titulo')
  Registracion - SocialBook
@endsection

@section('principal')
  <div class="container-fluid">


          <main class="row">
              <section class="col-12 inicio-sesion m-xs-0 p-xs-0 p-sm-5 text-white">
                <div class="contenedor-inicio shadow-lg rounded  col-12 col-sm-9 col-md-7 col-xl-5  mx-5 p-5 mx-auto">
                      <form class="" action="" method="POST" enctype="multipart/form-data">
                        <h2 class="text-center">Registrate</h2>
                        <p class="pb-5 text-center">Por favor, llena este formulario para obtener tu cuenta</p>
                        <div class="form-group">
                            {{-- <i class="fa fa-user icon"></i> --}}
                            <input type="text" class="form-control   border-top-0 border-right-0 border-left-0 "  name="nombre" placeholder="Ingrese su Nombre" value="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-top-0 border-right-0 border-left-0 " name="apellido" placeholder="Ingrese su Apellido" value=""  >
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-top-0 border-right-0 border-left-0" name="usuario" placeholder="Ingrese su email" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border-top-0 border-right-0 border-left-0" name="contrasenia" value="" placeholder="Contrasenia" >
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control border-top-0 border-right-0 border-left-0" name="contraseniaConfirmada" value="" placeholder="Confirmar Contrasenia" >
                        </div>
                        <div class="remember">
                            <input type="checkbox" name="recordarme" value="recordar"> <span>Recordar mi cuenta</span>
                        </div>
                          <section class="imagenPerfil row my-5 ">
                             <h5 class="text-center col-12">Elegi tu imagen de perfil</h5>
                               <div class="col-12 text-center">
                                 <input type="file" name="imagen" value="Enviar">
                               </div>
                           </section>

                           <section class="preguntaSecreta">

                              <p>Selecciona una de las preguntas:</p>
                              <select class="custom-select mb-3" name="pregunta">
                                <option name="">Elige una de las preguntas</option>
                                <option name="apellidoMama">Cual es el apellido de soltera de tu mama?</option>
                                <option name="nombreMascota">Cual es el nombre de tu primer mascota?</option>
                                <option name="anioAbuelo">En que anio nacio tu abuelo?</option>
                              </select>
                              <small  class="text-nowrap">
                             Con esto, podremos recuperar tu contrasenia en el caso que te la olvides!
                              </small>
                              <input  class="form-control  px-3 mb-2" name="respuesta" placeholder="Ingresa tu respuesta">

                           </section>


                        <div>
                            <button type="submit" class="btn rounded-pill text-white w-75 d-block mx-auto"> Registrarse</button>
                        </div>
                          <p class="text-center  py-3">Ya estas registrado?<a href="login.php" class="link-iniciar-sesion" style="color: #6bec9c;"> Inicia sesion</a> </p>

                      </form>

                    </div>

              </section>

          </main>
      </div>

@endsection
