@extends('layouts.header')

@section('muro')

  <!--Muro con posteos -->

      <div class="content-posts active" id="posts">
          <div id="posts-container" class="container-fluid container-posts py-3">

            @foreach ($posts as $post)
            
        
                <div class="card-post py-5">
                    <div class="row">
                        <div class="col-xs-3 col-sm-2">
                            <a href="Perfil del usuario" title="Perfil">
                                <img src="/storage/{{$post->user->foto_perfil}}" alt="Imagen de perfil del usuario" class="img-circle img-user">
                            </a>
                        </div>

                        <div class="col-xs-9 col-sm-8 info-user">
                            <h3><a href="perfilDelUsuario.php" title="Profile"></a></h3>
                            <p>{{$post->user->name??"usuario Anonimo"}}</p>
                            <p><i>{{$post->created_at}}</i></p>
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-2">
                      <h3>{{$post->title}}</h3>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 data-post">
                            <p>{{$post->review}}</p>
                            <div class="reaction">
                                <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 156 <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
                            </div>
                            <div class="comments">
                                <div class="more-comments">Ver mas comentarios</div>
                                 @foreach($post->comment as $comment ) 
                                    <ul>
                                        <li>{{$comment['comment']}}</li>
                                    </ul>
                                @endforeach
                                <form action="/home" method="POST">
                                    @csrf
                                    <input type="text" name="post_id" value="{{$post->id}}" hidden>
                                    <input type="text" name="user_id" value="{{$post->user->id}}" hidden>
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

              @endforeach

           </div>
     </div>

      <!--Esto es un spinner que tiene que aparecer antes de seguir cargando posteos-->
        <div class="d-flex justify-content-center mt-3">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>

@endsection
