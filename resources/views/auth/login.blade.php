
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
        </div>
    </div>
    </section>

</main>
</div>


@endsection
