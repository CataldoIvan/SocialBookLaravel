@extends('layouts.header')

@section('perfil')


<div class="content-posts profile-content">

    <div class="contenedor-imagen">
        <img class="banner-profile" src="/storage/{{Auth::user()->foto_portada??'../img/wallp1.jpg'}}" alt="">
        <div class="texto_sobre_img fixed"> <a href="#" title="Editar portada" data-toggle="modal" data-target="#modifyPhotoPort">
                <button class="botonaso">Cambiar imagen de portada</button>
            </a></div>
    </div>
    <!-- Tab Panel -->
    <ul class="nav nav-tabs" role="tablist" id="misTabs">
        <li class="">
            <a href="#posts" role="tab" id="postsTab" data-toggle="tab" aria-controls="posts" aria-expanded="true" style="background-color:white;">Mis ultimos posteos</a>
        </li>
        <li class="">
            <a href="#profile" role="tab" id="profileTab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Mi informacion</a>
        </li>
        <li class="">
            <a href="#Seguidos" role="tab" id="SeguidosTab" data-toggle="tab" aria-controls="Seguidos" aria-expanded="true">Seguidos</a>
        </li>
        <li class="">
            <a href="#follower" role="tab" id="followerTab" data-toggle="tab" aria-controls="follower" aria-expanded="true">Mis seguidores</a>
        </li>
        <li class="">
            <a href="#profileDelete" role="tab" id="profileTab" data-toggle="tab" aria-controls="profileDelete" aria-expanded="true">Borrar mi cuenta</a>
        </li>
    </ul>


    <!--Empieza el Tab Content-->
    <div class="tab-content">

        <!-- Tab Posts -->
        <div class="tab-pane fade active in" role="tabpanel" id="posts" aria-labelledby="postsTab">
            <div id="tab-pane fade active in" class="container-fluid container-posts">
                @foreach ($posts as $post)

                @if ($post -> user_id == Auth::user()->id)

                <div class="card-post">
                    <div class="row">
                        <div class="col-xs-3 col-sm-2">
                            <a href="Perfil/{{$post->user->id}}{{$post->user->name}}{{$post->user->surname}}" title="Perfil">
                                <img src="/storage/{{$post->user->foto_perfil??null}}" alt="Imagen de perfil del usuario" class="img" style=" width: 120px; 					height: 120px;border-radius: 50%;">
                            </a>
                        </div>
                        <div class="col-xs-9 col-sm-8 info-user">
                            <h3><a href="perfilDelUsuario.php" title="Profile"></a></h3>
                            <h2>{{$post->user->name??"usuario " }} {{$post->user->surname??" Anonimo"}}</h2>
                            <p><i>{{$post->created_at}}</i></p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-offset-2 mt-3">
                        <h5><u>Titulo:</u></h5>
                        <h3>{{$post->title}}</h3>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 data-post">
                          <h5><u>Resenia:</u></h5>
                          <h3>{{$post->review}}</h3>
                            {{-- <div class="reaction">
                                <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 156 <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
                            </div> --}}
                            <div class="comments">
                                <div class="more-comments">Ver mas comentarios</div>
                                @foreach($post->comment as $comentario )

                                    <ul>
                                        <li>
                                            <img src="/storage/{{$comentario->user->foto_perfil??null}}" id="foto_comentario" alt="Imagen de perfil del usuario" class="img" style=" width: 60px; height: 60px;border-radius: 50%;">
                                            <b>{{$comentario->user->name??"usuario"}} {{$comentario->user->surname??" Anonimo"}} Comentó:</b> <br>
                                            {{$comentario['comment']}}
                                        </li>
                                    </ul>
                                    @endforeach
                                    <form action="/home" method="POST">
                                        @csrf
                                        <input type="text" name="post_id" value="{{$post->id??'Anonimo'}}" hidden>
                                        <input type="text" name="user_id" value="{{Auth::user()->id??'Anonimo'}}" hidden>
                                        <input type="text" name="comment" placeholder="Comentar">
                                        <button type="submit">comentar</button>

                                    </form>
                                    <!-- Este es el boton de borrar comentario -->
                                    <div class="borrarPost mt-1">
                                        <form action="/home" method="POST">
                                            @csrf
                                            <input type="text" name="id" hidden value="{{$post->id}}">
                                            <button type="submit " class="btn btn-primary">Borrar comentario</button>
                                        </form>
                                    </div>
                                    <!-- Termina el boton -->
                            </div>
                        </div>
                    </div>
                </div>

                @endif
                @endforeach

            </div>
        </div><!-- fin del Tab Posts -->

        <!-- Modal Bootstrap para Editar la foto de portada -->
        <div class="modal fade" id="modifyPhotoPort" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title" id="exampleModalLabel">Modifique su Foto de Portada</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/CambiarFotoPortada" method='POST' enctype='multipart/form-data'>
                            @csrf
                            <h4>Elige tu foto de Portada:</h4>
                            <input type='hidden' name='id' value='{{Auth::user()->id}}'>
                            <input type="file" name='foto_portada' value="">
                            <br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type='submit' class="btn btn-primary">Guardar Cambios</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!--Empieza el Tab Profile-->
        <div class="tab-pane fade" role="tabpanel" id="profile" aria-labelledby="profileTab">
            <div class="container-fluid container-posts">
                <div class="card-post">
                    <ul class="profile-data">
                        <li><b>Nombre : </b>{{Auth::user()->name}}</li>
                        <li><b>Apellido:</b> {{Auth::user()->surname}}</li>
                        <li><b>Email: </b> {{Auth::user()->email}} </li>


                    </ul>
                </div>
            </div>
        </div>

        <!--Empieza el Tab Borrar cuenta-->
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
        <!-- Empieza el TAB Seguidos-->
        <div class="tab-pane fade" role="tabpanel" id="Seguidos" aria-labelledby="SeguidosTab">
            <div class="container-fluid container-posts">
                <div class="card-post">
                    <div class="scrollbar-container">
                        <?php
                            $seguidos=App\Follower::where('user_id','=',Auth::user()->id)->get();

                            if(!empty($seguidos)){

                                        ?>
                        @foreach($seguidos as $seguido => $usuario)

                        <?php $usuarioSeguido = App\User::find($usuario->follower_id); ?>

                        <div class="row row-user-list">
                            <div class="col-sm-2 col-xs-3">
                                <img src="/storage/{{$usuarioSeguido->foto_perfil??'../img/defaultavatar.jpg'}}" alt="User name" class="img-circle img-user">
                            </div>
                            <div class="col-sm-7 col-xs-9">
                                <p><b>{{$usuarioSeguido['name']??'usuario'}} {{$usuarioSeguido['surname']??'eliminado'}} </b> <span class="badge"></span></p>
                                <p class="chat-time">Lo sigues desde : {{$usuarioSeguido['created_at']}}</p>
                                <p>{{$usuarioSeguido['bio']}}</p>
                            </div>
                            </div>
                            @endforeach
                            
                            <?php } else {?>
                            <h1>Aun no estas siguiendo a nadie</h1>
                            <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div><!-- fin del tab Seguidos-->


        <!-- Empieza el TAB follower-->
        <div class="tab-pane fade" role="tabpanel" id="follower" aria-labelledby="followerTab">
            <div class="container-fluid container-posts">
                <div class="card-post">
                    <div class="scrollbar-container">
                        <?php
                            $seguidores=App\Follower::where('follower_id','=',Auth::user()->id)->get();

                            if(!empty($seguidos)){

                            ?>
                        @foreach($seguidores as $seguidor => $usuario)

                        <?php $usuarioSeguidor = App\User::find($usuario->user_id); ?>

                        <div class="row row-user-list">
                            <div class="col-sm-2 col-xs-3">
                                <img src="/storage/{{$usuarioSeguidor->foto_perfil??null}}" alt="User name" class="img-circle img-user">
                            </div>
                            <div class="col-sm-7 col-xs-9">
                                <p><b>{{$usuarioSeguidor->name}} {{$usuarioSeguidor->surname}} </b> <span class="badge"></span></p>
                                <p class="chat-time">Te sigue desde : {{$usuarioSeguidor->created_at}}</p>
                                <p>{{$usuarioSeguidor->bio}}</p>
                            </div>
                            {{-- <div class="col-sm-3 hidden-xs">
                                <p><a href="#" title="Replay"><span class="badge badge-replay">Ver perfil ></span></a></p>
                            </div> --}}
                            </div>     
                            @endforeach
                            <?php } else {?>
                            <h1>Aun no estas siendo seguido por nadie :( </h1>
                            <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div><!-- fin del tab Seguidores-->

        <!-- fin del tab Profile -->
    </div><!-- Se cierra el Tab Content-->





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
                <form action="/perfil" method="POST">
                    @csrf
                    <input type="text" hidden name='userid' value='{{Auth::user()->id}}'>
                    <button type="submmit" class="btn btn-primary">Si, estoy seguro</button>
                </form>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>






<!-- **** SCRIPT DE JS PARA MANTENER LA TABS ACTIVAS EN EL PERFIL CUANDO SELECCIONAMOS ALGUNA DE LAS SOLAPAS*** !-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>
<script type="text/javascript">
    $("a").click(function() {
        $("a").css("background-color", "");
        $(this).css("background-color", "white");
    });
</script>

<script>
    $(document).ready(function() {
        $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });
        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('#misTabs a[href="' + activeTab + '"]').tab('show');
        }
    });
</script>


@endsection
