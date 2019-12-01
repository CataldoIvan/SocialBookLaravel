
<!DOCTYPE html>

<html>

<head>
    <title>Muro - SocialBook</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
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
                  <span class="hidden-xs hidden-sm">Configuracion</span> <i class="fa fa-cogs" aria-hidden="true"></i>
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
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="second-icon dropdown menu-icon">
            <span class="dropdown-toggle" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <span class=".d-none .d-md-block .d-lg-none">Notificaciones</span> <i class="fa fa-bell-o" aria-hidden="true"></i> <span class="badge">2</span>
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
            <span><a href="perfil" title="Perfil"><span class="hidden-xs hidden-sm">Perfil</span> <i class="fa fa-user" aria-hidden="true"></i></a>
            </span>
        </div>
        <div class="second-icon menu-icon">
            <span><a href="muro" title="Wall"><span class="hidden-xs hidden-sm">Muro</span> <i class="fa fa-database" aria-hidden="true"></i></a>
            </span>
        </div>
    </header>

    <!--Barra de costado con el Perfil -->
    <div class="sidebar-nav">
        <a href="perfil" title="Perfil">
            <img alt="ImagenPerfil" class="img-circle img-user" src="/storage/{{Auth::user()->foto_perfil}}">
        </a>
        <form action="/userPrueba" method='POST' enctype='multipart/form-data'>
            @csrf
            <input type='hidden' name='id' value='{{Auth::user()->id}}'>
            <input type="file" name='foto_perfil' '> Cambia tu foro de Perfil
            <button type='submit'>Cambiar</button>
        </form>
        <h2 class="text-center hidden-xs"><a href="perfil-personal.php" title="Perfil"></a>{{Auth::user()->name }} {{Auth::user()->surname }}</h2>
        <p class="text-center user-description hidden-xs">
            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
        </p>
    </div>

    <!--Muro con posteos -->
    <section class="muro">
        @yield("muro")
    </section>

    <!-- **** SCRIPTS y JQUERY *** !-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script >

        

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
