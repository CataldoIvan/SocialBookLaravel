@extends('plantillaPreLogin')

@section("titulo")
Home - SocialBook
@endsection

@section("principal")

<div class="jumbotron jumbotron-fluid text-white" id="jumbo">
  <div class="container">
    <h1 class="display-4" id="up"><u>¡ Bienvenidos a SocialBook !</u></h1>
    <p class="lead">¡ Una red social para los amantes de los libros !</p>
  </div>
</div>



  <div class="row">
      <div class="col-md-4 offset-md-1 mt-4">
        <div class="card bg-transparent border-success">
          <h5 class="card-header text-white border-success" id="op">
            Reseñas
          </h5>
  <div class="card-body" id="op">
    <p class="card-text text-white">
      <strong>SocialBook te permite hacer reseña de todo tipo, incluso con spoilers pero ¡Alto ahi! No te asustes no le arruinaras el final a nadie, esta pagina le advierte al lector si desea o no leer esa reseña con spoilers, nadie te arruinara la lectura, no te asustes.</strong>
    </p>
  </div>
  </div>
  </div>
</div>

<div class="row" id="row2">
<div class="col-md-4 offset-md-7 mt-4">
  <div class="card bg-transparent border-success">
    <h5 class="card-header text-white border-success" id="op">
    Un conteo
  </h5>
  <div class="card-body" id="op">
    <p class="card-text text-white">
    <strong>  Entre tantos libros cuesta llevar una cuanta total de cuantos vamos leyendo y cuento estuvimos leyendo, nosotros te ayudamos, podes escanear tu lectura del dia y anotar el numero de pagina que vas eso te dara un porcentaje total, tus libros se iran acumulando pero, no hagas trampa debes terminal el libro para que este entre en tu lista de "leidos".</strong>
    </p>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4 offset-md-1 mt-4 mb-5">
<div class="card bg-transparent border-success">
  <h5 class="card-header text-white border-success" id="op">
  Retos y desafios
</h5>
<div class="card-body" id="op">
  <p class="card-text text-white">
    <strong>¿Quieres desafiar a alguien?¿O ponerte una meta? Aqui te damos la oportunidad de crear tus propios retos y dejar que otros se unan, asi que manos a la obra ¡Tú puedes!.</strong>
  </p>
</div>
</div>
</div>
</div>

@endsection
