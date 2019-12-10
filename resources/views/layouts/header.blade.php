
<!DOCTYPE html>

<html>

<head>
    <title>Muro - SocialBook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/styleperfil.css" type="text/css">
</head>

<body id="wall">

    <!--Header-->
    <header class="text-right">
        <form class="text-left search" method="GET">
            <input name="q" type="text" placeholder="Buscar..">
        </form>
        <div class="menu-icon">
            <div class="dropdown">
                <span class="dropdown-toggle" role="button" id="dropdownSettings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="d-none d-lg-block">Configuracion</span><i class="fa fa-cogs" aria-hidden="true"></i>
                </span>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSettings">
                    <li>
                        <a href="#" title="Editar usuario" data-toggle="modal" data-target="#settingsmodal">
                            <div class="col-xs-4">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-8 text-left">
                                <span>Editar usuario</span>
                            </div>
                        </a>
                    </li>
                    <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                        <div class="col-xs-4">
                          <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                          <span>{{ __('Cerrar Sesion') }}</span>
                            </div>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
            <!-- Esta solapa es la de Notificaciones de nuevos comentarios. Hay que ver como hacerla dinamica sin complicarnos mucho -->
        <div class="second-icon dropdown menu-icon">
            <span class="dropdown-toggle" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <span class="d-none d-lg-block">Notificaciones</span> <i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge">2</span>
            </span>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownNotification">
                <li class="new-not">
                    <a href="#" title="Nombre de usuario comment"><img src="img/Amigo2.jpg" alt="Imagen de perfil del usuario" class="img-circle img-user-mini"> User comments your post</a>
                </li>
                <li class="new-not">
                    <a href="#" title="Nombre de usuario comment"><img src="img/user3.jpg" alt="Imagen de perfil del usuario" class="img-circle img-user-mini"> User comments your post</a>
                </li>
                <li>
                    <a href="#" title="Nombre de usuario comment"><img src="img/user4.jpg" alt="Imagen de perfil del usuario" class="img-circle img-user-mini"> User comments your post</a>
                </li>
                <li role="separator" class="divider"></li>
                <li><a href="#" title="All notifications">All Notifications</a></li>
            </ul>
        </div>
        <div class="second-icon menu-icon">
            <span><a href="perfil" title="Perfil"><span class="d-none d-lg-block">Perfil</span> <i class="fa fa-user" aria-hidden="true"></i></a>
            </span>
        </div>
        <div class="second-icon menu-icon">
            <span><a href="home" title="Wall"><span class="d-none d-lg-block">Home</span> <i class="fa fa-database" aria-hidden="true"></i></a>
            </span>
        </div>
    </header>

    <!-- Modal Bootstrap para Editar Perfil -->
<div class="modal fade" id="settingsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method='POST'>
          @csrf
      <div class="modal-body">
        <div class="row modal-row">
          <div class="col-sm-3">
          <label>Nombre y apellido:</label>
          </div>
          <div class="col-sm-9">
          <input type="text" name='name' value='{{Auth::user()->name}} {{Auth::user()->surname}}'>
          </div>
          {{-- <div class="col-sm-3">
            <a href="#" title="Editar Usuario"><i class="fa fa-pencil" aria-hidden="true"></i> <i>Edit</i></a>
          </div> --}}
        </div>
        <div class="row modal-row">
          <div class="col-sm-3">
            <p>
             <label>Email: </label>
            </p>
          </div>
          <div class="col-sm-9">
            <p>
            <input type="text" name='name' value='{{Auth::user()->email}}'>
            </p>
          </div>
          {{-- <div class="col-sm-3">
            <p>
              <a href="#" title="Editar Email"><i class="fa fa-pencil" aria-hidden="true"></i> <i>Edit</i></a>
            </p>
          </div> --}}
        </div>
        <div class="row modal-row">
          <div class="col-sm-3">
            <p>
              <label for="password">Cambiar contrasenia: </label>
            </p>
          </div>
          <div class="col-sm-9">
            <p>*********</p>
          </div>
          {{-- <div class="col-sm-3">
            <a href="#" title="Editar Password"><i class="fa fa-pencil" aria-hidden="true"></i> <i>Edit</i></a>
          </div> --}}
        </div>
      </div>
      <div class="modal-footer">
          <input type="hidden" name="id" value="{{Auth::user()->id}}">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
</form>

<!--Barra de costado con el Perfil -->
<div class="sidebar-nav">
    <a href="perfil" title="Perfil">
        <img alt="ImagenPerfil" class="img-circle img-user" src="/storage/{{Auth::user()->foto_perfil}}">
    </a>
     <form action="/userPrueba" method='POST' enctype='multipart/form-data'>
        @csrf
        <input type='hidden' name='id' value='{{Auth::user()->id}}'>
        <input type="file" name='foto_perfil' '> Cambia tu foto de Perfil
        <button type='submit'>Cambiar</button>
    </form> 
    <h2 class="text-center d-none d-lg-block"><a href="perfil" title="Perfil"></a>{{Auth::user()->name }} {{Auth::user()->surname }}</h2>
    <p class="text-center user-description d-none d-lg-block">
        <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
    </p>
    <div class="resenia mb-1">
      <button data-target="#crearPosteo" type="button" class="btn btn-primary" data-toggle="modal">Crear resenia sin spoiler</button>
    </div>
</div>
<!-- Modal Bootstrap para Crear Posteo -->
<div class="modal fade" id="crearPosteo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header bg-info">
      <h5 class="modal-title" id="exampleModalLabel">Nuevo Posteo</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <form action="{{ route('post.create') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">Titulo:</label>
          <input name="title" type="text" class="form-control" id="recipient-name">
        </div>
        <div class="form-group">
          <label for="recipient-name" class="col-form-label">¿Contiene spoiler?</label>
          <input type="text" class="form-control" id="recipient-name"  placeholder="Si, tiene!.... No, no estoy espoileando!">
        </div>
        <div class="form-group">
          <label for="message-text" class="col-form-label">Tu mensaje:</label>
          <textarea name="review" id="new-post" class="form-control" id="message-text"></textarea>
        </div>
        <div class="adjuntarImagen">
             <h5 class="text-center col-12">Adjuntar imagen</h5>
               <div class="col-12 text-center">
                 <input type="file" name="imagen" >
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Postear!</button>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
      </form>
      {{-- donde corno meto el codigo de mensajes de error y mensaje exitoso? --}}
      @if (Session::has('message'))
            {{Session::get('message')}}
          </div>
        </div>
      @endif
      {{-- donde corno meto el codigo de mensajes de error y mensaje exitoso? --}}
  </div>
</div>
</div>
</div>



    <section>
      @yield('perfil')
    </section>

    {{-- Muro con posteos de mentira --}}
    <section>
        @yield('muro')
    </section>

    <!-- **** SCRIPTS y JQUERY *** !-->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>



        //- Smooth Scrolling es para hacer el intercambio entre pagina mas despacio

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

    </script>



</body>


</html>
