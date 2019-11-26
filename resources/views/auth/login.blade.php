
@extends('plantillaPreLogin')

@section('titulo')
  Login - SocialBook
  @endsection

@section('principal')


<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center  rounded mb-5 pb-5">
        <div class="col-md-8" >
            <div class="card" style="background:rgba(0,0,0,0.3); color:white;">
                <div class="card-header m-auto" style="font-size:25px;">{{ __('Login') }}</div>

                <div class="card-body contenedor-inicio bg-sm-red rounded">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
=======
<div class="container-fluid">

<main class="row">
    <section class="col-12 inicio-sesion py-xs-0 py-5 text-white">
      <div class="contenedor-inicio shadow-lg rounded  col-12 col-sm-9 col-md-7 col-xl-5  mx-5 p-5 mx-auto" style="background: rgba(0,0,0,.40);">
        <img src="/img/avatar.png" class="mx-auto d-block" alt="">


            <form class="m-5" method="post" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                  <input type="email" class="form-control @error('email') is-invalid @enderror border-top-0 border-right-0 border-left-0" name="email" placeholder="Email"
                  value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                  <input type="password" class="form-control @error('password') is-invalid @enderror border-top-0 border-right-0 border-left-0" name="password" required autocomplete="current-password" placeholder="Contrasenia">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="remember">
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} value="recordar"> <span >Recordar mi cuenta</span>
              </div>
              <div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" style="color:blue" href="{{ route('password.request') }}">
                        {{ __('Olvidaste tu contrasenia?') }}
                    </a>
                @endif
              </div>
              <div class="p-xs-1 text-center my-5 ">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                  <p class="text-center" > Aun no esta registrado?<a href="register"style="color: #6bed9c;"> Crear cuenta</a></p>
              </div>
            </form>
>>>>>>> a53a55617655153c439921e0f2976a5ad8d9689c
        </div>
    </section>

</main>
</div>

@endsection
