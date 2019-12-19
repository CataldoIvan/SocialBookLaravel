@extends('layouts.header')

@section('muro')
<div class="container mt-5 pt-5 ">
    <div class="row ml-1  mr-1  ">
        <div class="offset-md-2 mt-5">
            <h1>Resultados de la busqueda : {{Request::get('search')}}</h1>
            <h2>En Usuario</h2>
            @forelse ($searchOfUser as $value)
                <div class="card m-2" style="width: 12rem; display: inline-block; ">
                     <img class="card-img-top" src="/storage/{{$value->foto_perfil??'../img/defaultavatar.jpg'}}" alt="foto perfil">
                    <div class="card-body">
                    <h5 class="card-title">{{ $value->name }} {{ $value->surname }}</h5>
                    <p class="card-text">{{ $value->bio }} </p>
                    <a href="#" class="btn btn-secondary">Ir al perfil</a>
                    <!--aca verifico configuro los botones de seguimiento -->
                    <?php
                    try{
                        $if_null=App\Follower::where('follower_id','=',$value->id)
                                            ->where('user_id','=',Auth::user()->id)
                                            ->get();

                    } catch (Exception $e) {
                        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
                    }

                     /*  dd(empty($if_null));      */
                    if(empty($if_null[0]->user_id) ){
                    ?>
                    <button class="btn btn-primary mt-1"><a href="{{route('follow', $value->id)}}">Seguir</a></button>
                     <?php
                     }else{ ?>
                    <button class="btn btn-warning mt-1"><a href="{{route('unFollow', $value->id)}}">Dejar de seguir</a></button>
                    <?php
                    }
                    ?>
                </div>
                </div>
            @empty
                <p>No se encontraron resultados </p>
            @endforelse
           <!--  //muestra usuarios por apellido -->
            @forelse ($searchOfUserSurname as $value)
                <div class="card m-2" style="width: 12rem; display: inline-block; ">
                     <img class="card-img-top" src="/storage/{{$value->foto_perfil??'../img/defaultavatar.jpg'}}" alt="foto perfil">
                    <div class="card-body">
                    <h5 class="card-title ">     {{ $value->name }} {{ $value->surname }}</h5>
                    <p class="card-text">{{ $value->bio }} </p>
                    <a href="#" class="btn btn-secondary">Ir al perfil</a>
                    <!--aca verifico configuro los botones de seguimiento -->
                    <?php
                    $if_null=App\Follower::where('follower_id','=',$value->id)->first();
                    if(is_null($if_null)){
                    ?>
                    <bu<div class="content-posts profile-content">ref="{{route('follow', $value->id)}}"> Follow</a></button>
                     <?php
                     }else{ ?>
                    <button class="btn btn-warning mt-1"><a href="{{route('unFollow', $value->id)}}">Dejar de seguir</a></button>
                    <?php
                    }
                    ?>
                </div>
                </div>
            @empty

            @endforelse
            <h2 class='mt-3'>En Posteos de Libros</h2>
            @forelse ($searchOfBook as $value)
            <div class="card-post">
                    <div class="row">
                        <div class="col-xs-3 col-sm-2">
                            <!-- <a href="Perfil/{{$value->user->id}}{{$value->user->name}}{{$value->user->surname}}" title="Perfil"> -->
                                <img src="/storage/{{$value->user->foto_perfil??null}}" alt="Imagen de perfil del usuario" class="img" style=" width: 120px; 					height: 120px;border-radius: 50%;">
                           <!--  </a> -->
                        </div>
                        <div class="col-xs-9 col-sm-8 info-user">
                            <h3><a href="perfilDelUsuario.php" title="Profile"></a></h3>
                            <h2 class="offset-1">       {{$value->user->name??"usuario " }} {{$value->user->surname??" Anonimo"}}</h2>
                            
                        </div>
                    </div>
                    <div class="col-xs-3 col-sm-offset-2 mt-3">
                        <h5><u>Titulo:</u></h5>
                        <h3>{{$value->title}}</h3>
                    </div>
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 data-post">
                          <h5><u>Resenia:</u></h5>
                          <h3>{{$value->review}}</h3>
                            {{-- <div class="reaction">
                                <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 156 <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
                            </div> --}}
                            <div class="comments">
                                <div class="more-comments">Ver mas comentarios</div>
                                @foreach($value->comment as $comentario )

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
                                        <input type="text" name="post_id" value="{{$value->id}}" hidden>
                                        <input type="text" name="user_id" value="{{Auth::user()['id']}}" hidden>
                                        <input type="text" name="comment" placeholder="Comentar">
                                        <button type="submit">comentar</button>

                                    </form>
                                  
                                    
                            </div>
                        </div>
                    </div>
                </div>

            @empty
                <p>No se encontraron resultados </p>
            @endforelse
            <a href="/home" class='btn btn-secondary mb-5'>Volver al Home</a>
        </div>
    </div>
</div>

@endsection
