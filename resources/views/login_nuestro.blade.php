@extends('plantillaPreLogin')

@section('titulo')
  Login - SocialBook
@endsection

@section('principal')

  <div class="container-fluid">

            <main class="row">
                <section class="col-12 inicio-sesion py-xs-0 py-5 text-white">
                  <div class="contenedor-inicio shadow-lg rounded  col-12 col-sm-9 col-md-7 col-xl-5  mx-5 p-5 mx-auto" style="background: rgba(0,0,0,.40);">
                    <img src="/img/avatar.png" class="mx-auto d-block" alt="">


                        <form class="m-5" method="post">
                          <div class="form-group">
                              <input type="email" class="form-control  border-top-0 border-right-0 border-left-0" name="usuario" placeholder="Email"
                              value="">
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control  border-top-0 border-right-0 border-left-0" name="password" value="" placeholder="Contrasena">
                          </div>
                          <div class="remember">
                              <input type="checkbox" name="recordarme" value="recordar"> <span >Recordar mi cuenta</span>
                          </div>
                          <div>
                              <a href="#"style="color: #6bed9c; text-decoration: none;">Olvidaste la contrasena?</a>
                          </div>
                          <div class="p-xs-1 text-center my-5 ">
                              <button type="submit" class="btn rounded-pill text-white w-75 mx-auto"style="background: #51ec9c"> Iniciar Sesion</button>

                              <p class="text-center" > Aun no esta registrado?<a href="registracion "style="color: #6bed9c;"> Crear cuenta</a></p>
                          </div>
                        </form>
                    </div>
                </section>

            </main>
        </div>

@endsection
