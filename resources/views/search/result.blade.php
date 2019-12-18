@extends('layouts.header')

@section('muro')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="offset-2">
            <h1>Resultados de la busqueda : {{Request::get('search')}}</h1>
            <h2>En Usuario</h2>
            @forelse ($searchOfUser as $value)
                <div class="card m-2" style="width: 12rem; display: inline-block; ">
                     <img class="card-img-top" src="/storage/{{$value->foto_perfil??'../img/defaultavatar.jpg'}}" alt="foto perfil">
                    <div class="card-body">
                    <h5 class="card-title">{{ $value->name }} {{ $value->surname }}</h5>
                    <p class="card-text">{{ $value->bio }} </p>
                    <a href="#" class="btn btn-secondary">ir al perfil</a>
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
                    <a href="{{route('follow', $value->id)}}"> Follow</a>
                     <?php
                     }else{ ?>
                    <a href="{{route('unFollow', $value->id)}}"> UnFollow</a>
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
                    <h5 class="card-title">{{ $value->name }} {{ $value->surname }}</h5>
                    <p class="card-text">{{ $value->bio }} </p>
                    <a href="#" class="btn btn-secondary">ir al perfil</a>
                    <!--aca verifico configuro los botones de seguimiento -->
                    <?php
                    $if_null=App\Follower::where('follower_id','=',$value->id)->first();
                    if(is_null($if_null)){
                    ?>
                    <a href="{{route('follow', $value->id)}}"> Follow</a>
                     <?php
                     }else{ ?>
                    <a href="{{route('follow', $value->id)}}"> Siguientdo</a>
                    <?php
                    }
                    ?>
                </div>
                </div>
            @empty
                
            @endforelse
            <h2 class='mt-3'>En Libros</h2>
            @forelse ($searchOfBook as $value)
             <div class="card m-2" style="width: 12rem; display: inline-block; ">
                     <img class="card-img-top" src="/storage/{{$value->foto??'../img/librodefault.jpg'}}" alt="foto perfil">
                    <div class="card-body">
                    <h5 class="card-title">{{ $value->name }} </h5>
                    <p class="card-text">{{ $value->description }} </p>
                    <a href="#" class="btn btn-secondary">Ver resenia</a>
                   
                </div>
                </div>
            @empty
                <p>No se encontraron resultados </p>
            @endforelse
            <a href="/home" class='btn btn-secondary mt-5'> Volver al Home</a>
        </div>
    </div>
</div>

@endsection