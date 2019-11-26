@extends('layouts.header')

@section('muro')


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
            <img alt="ImagenPerfil" class="img-circle img-user" src="">
        </a>
        <h2 class="text-center hidden-xs"><a href="perfil-personal.php" title="Perfil"></a>{{Auth::user()->name }} {{Auth::user()->surname}}</h2>
        <p class="text-center user-description hidden-xs">
            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
        </p>
    </div>

        <div class="content-posts profile-content">
        <div class="banner-profile">
        </div>
        <!-- Tab Panel -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active">
              <a href="#posts" role="tab" id="postsTab" data-toggle="tab" aria-controls="posts" aria-expanded="true">Mis ultimos posteos</a>
            </li>
            <li class="active">
              <a href="#profile" role="tab" id="profileTab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Mi informacion</a>
            </li>
            <li class="active">
              <a href="#profileDelete" role="tab" id="profileTab" data-toggle="tab" aria-controls="profileDelete" aria-expanded="true">Borrar mi cuenta</a>
            </li>
        </ul>

        <!--Empieza el Tab Content-->
        <div class="tab-content">

            <!-- Tab Posts -->
            <div class="tab-pane fade active in" role="tabpanel" id="posts" aria-labelledby="postsTab">
                <div id="posts-container" class="container-fluid container-posts">

                    <div class="card-post">
                        <div class="row">
                            <div class="col-xs-3 col-sm-2">
                                <a href="personal-profile.html" title="Profile">
                                    <img src="img/user.jpg" alt="User name" class="img-circle img-user">
                                </a>
                            </div>
                            <div class="col-xs-9 col-sm-10 info-user">
                                <h3><a href="personal-profile.html" title="Profile">My User</a></h3>
                                <p><i>2h</i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 data-post">
                                <p>Lorem Ipsum Dolor si amet</p>
                                <div class="reaction">
                                    &#x2764; 156 &#x1F603; 54
                                </div>
                                <div class="comments">
                                    <div class="more-comments">Ver mas comentarios</div>
                                    <ul>
                                        <li><b>User1</b> Lorem Ipsum Dolor si amet</li>
                                        <li><b>User2</b> Lorem Ipsum Dolor si amet &#x1F602;</li>
                                    </ul>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Add a comment">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-post">
                        <div class="row">
                            <div class="col-xs-3 col-sm-2">
                                <a href="personal-profile.html" title="Profile">
                                    <img src="img/user.jpg" alt="My User" class="img-circle img-user">
                                </a>
                            </div>
                            <div class="col-xs-9 col-sm-10 info-user">
                                <h3><a href="personal-profile.html" title="Profile">My User</a></h3>
                                <p><i>2h</i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-sm-8 col-sm-offset-2 data-post">
                                <p>Lorem Ipsum Dolor si amet</p>
                                <img src="img/post.jpg" alt="image post" class="img-post">
                                <div class="reaction">
                                    &#x2764; 1234 &#x1F603; 54
                                </div>
                                <div class="comments">
                                    <div class="more-comments">Ver mas comentarios</div>
                                    <ul>
                                        <li><b>User1</b> Lorem Ipsum Dolor si amet</li>
                                        <li><b>User2</b> Lorem Ipsum Dolor si amet &#x1F602;</li>
                                    </ul>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Add a comment">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-post">
                        <div class="row">
                            <div class="col-xs-3 col-sm-2">
                                <a href="personal-profile.html" title="Profile">
                                    <img src="img/user.jpg" alt="User name" class="img-circle img-user">
                                </a>
                            </div>
                            <div class="col-xs-9 col-sm-10 info-user">
                                <h3><a href="personal-profile.html" title="Profile">My User</a></h3>
                                <p><i>2h</i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2 data-post">
                                <p>Lorem Ipsum Dolor si amet</p>
                                <video controls>
                                  <source src="img/post-video.mp4" type="video/mp4">
                                  Your browser does not support the video tag.
                                </video>
                                <div class="reaction">
                                    &#x2764; 1234 &#x1F603; 54
                                </div>
                                <div class="comments">
                                    <div class="more-comments">Ver mas comentarios</div>
                                    <ul>
                                        <li><b>User1</b> Lorem Ipsum Dolor si amet</li>
                                        <li><b>User2</b> Lorem Ipsum Dolor si amet &#x1F602;</li>
                                    </ul>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Add a comment">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="loading">
                    <img src="img/load.gif" alt="loader">
                </div>
            </div><!-- fin del Tab Posts -->

            <!--Empieza el Tab Profile-->
            <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profileTab">
                <div class="container-fluid container-posts">
                    <div class="card-post">
                        <ul class="profile-data">
                            <li><b>Nombre y apellido: </b>   {{Auth::user()->name}} {{Auth::user()->surname}} </li>
                            <li><b>Email: </b> {{Auth::user()->email}}   </li>
                            <li><b>Hobbies:</b> </li>
                            <li><b>Mis libros favoritos:</b> </li>
                            <li><b>Trabajo:</b> </li>
                            <li><b>Descripcion:  {{Auth::user()->name}} {{Auth::user()->surname}}</b> </li>
                        </ul>
                        <p><a href="" title="edit profile"><i class="fa fa-pencil" aria-hidden="true"></i> Editar mi informacion</a></p>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" role="tabpanel" id="profileDelete" aria-labelledby="profileTab">
                <div class="container-fluid container-posts">
                    <div class="card-post">
                        <span>Deseo borrar mi cuenta de SocialBook y todo el contenido de la misma.</span>
                    </div>
                        <div>
                          <a href="#" title="Delete" data-toggle="modal" data-target="#delete">
                          <button type="submit" name="button">Confirmar</button>
                          </a>
                        </div>
                </div>
            </div>

            <!-- fin del tab Profile -->
          </div><!-- Se cierra el Tab Content-->

  </div><!--Se cierra el content posts-->

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
          <div class="modal-body">
            <div class="row modal-row">
              <div class="col-sm-3">
                <label>Nombre: </label>
              </div>
              <div class="col-sm-6">
                {{Auth::user()->name}}
              </div>
              <div class="col-sm-3">
                <a href="#" title="Editar nombre"><i class="fa fa-pencil" aria-hidden="true"></i> <i>Edit</i></a>
              </div>
            </div>
            <div class="row modal-row">
              <div class="col-sm-3">
                <p>
                 <label>Apellido: </label>
                </p>
              </div>
              <div class="col-sm-6">
                <p>
                {{Auth::user()->surname}}
                </p>
              </div>
              <div class="col-sm-3">
                <p>
                  <a href="#" title="Editar apellidp"><i class="fa fa-pencil" aria-hidden="true"></i> <i>Edit</i></a>
                </p>
              </div>
            </div>
            <div class="row modal-row">
              <div class="col-sm-3">
                <p>
                 <label>Email: </label>
                </p>
              </div>
              <div class="col-sm-6">
                <p>
                {{Auth::user()->email}}
                </p>
              </div>
              <div class="col-sm-3">
                <p>
                  <a href="#" title="Editar Email"><i class="fa fa-pencil" aria-hidden="true"></i> <i>Edit</i></a>
                </p>
              </div>
            </div>
            
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </div>
    </div>
<!-- solo es a para -->

    <!-- Modal Bootstrap para confirmar el borrado de la cuenta -->

    <div class="modal" tabindex="-1" role="dialog" id="delete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿ Estas seguro de querer borrar tu cuenta de SocialBook ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Si, estoy seguro</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>




    <!-- **** SCRIPT DE JS TOMADO DE LA WEB PARA MANTENER LA TAB ACTIVA AL REFRESCAR *** !-->
    <!-- **** COMO DICE GUIDO KACZKA... ESTA MAL...(robar codigo) PERO NO ESTA TAAAAN MAL *** !-->
    <script>
          $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
          localStorage.setItem('activeTab', $(e.target).attr('href'));
      });

      // Acá guarda el index al cual corresponde la tab. Lo podés ver en el dev tool de chrome.
      var activeTab = localStorage.getItem('activeTab');

      // En la consola te va a mostrar la pestaña donde hiciste el último click y lo
      // guarda en "activeTab". Te dejo el console para que lo veas. Y cuando refresques
      // el browser, va a quedar activa la última donde hiciste el click.
      console.log(activeTab);

      if (activeTab) {
         $('a[href="' + activeTab + '"]').tab('show');
      }
  </script>
    

@endsection