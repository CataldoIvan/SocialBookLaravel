@extends('plantillaPreLogin')

@section('titulo')
  Registracion - SocialBook
@endsection

@section('principal')
<div class="container">
    <div class="row justify-content-center shadow-xs" >
        <div class="col-md-8 rounded "style="background:rgba(0,0,0,0.1); color:white;">
            <div class="card  shadow-xs rounded "style="background:rgba(0,0,0,0.3); color:white;">


                <div class="card-body   shadow-xs" >
                <h2 class="text-center">Registrate</h2>
                    <p class="pb-5 text-center">Por favor, llena este formulario para obtener tu cuenta</p>

                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrasenia') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contrasenia') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <section class="imagenPerfil row my-5 ">
                             <h5 class="text-center col-12">Elegi tu imagen de perfil</h5>
                               <div class="col-12 text-center">
                                 <input type="file" name="foto_perfil" >
                               </div>
                               @error('foto_perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </section>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 pb-4">
                                <button type="submit" class="btn rounded-pill text-white w-75 d-block mx-auto" style="background:#6ca965;">
                                    {{ __('Registrarse') }}
                                </button>
                                <p class="text-center  py-3">Ya estas registrado?<a href="login" class="link-iniciar-sesion" style="color: #6bec9c;"> Inicia sesion</a> </p>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
