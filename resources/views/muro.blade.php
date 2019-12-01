@extends('layouts.header')

@section('muro')

  <!--Muro con posteos -->
      <div class="content-posts active" id="posts">
          <div id="posts-container" class="container-fluid container-posts">

              <div class="card-post">
                  <div class="row">
                      <div class="col-xs-3 col-sm-2">
                          <a href="Perfil del usuario" title="Perfil">
                              <img src="" alt="Imagen de perfil del usuario" class="img-circle img-user">
                          </a>
                      </div>
                      <div class="col-xs-9 col-sm-10 info-user">
                          <h3><a href="perfilDelUsuario.php" title="Profile"></a></h3>
                          <p><i>2h</i></p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 data-post">
                          <p>Lorem Ipsum Dolor si amet</p>
                          <div class="reaction">
                              <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 156 <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
                          </div>
                          <div class="comments">
                              <div class="more-comments">Ver mas comentarios</div>
                              <ul>
                                  <li><b>Amigo1</b> Lorem Ipsum Dolor si amet</li>
                                  <li><b>Amigo2</b> Lorem Ipsum Dolor si amet <img draggable="false" class="emoji" alt="😂" src="https://twemoji.maxcdn.com/16x16/1f602.png"></li>
                              </ul>
                              <form>
                                  <input type="text" class="form-control" placeholder="Comentar">
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="card-post">
                  <div class="row">
                      <div class="col-xs-3 col-sm-2">
                          <a href="perfilDelUsuario.php" title="Perfil del usuario">
                              <img src="Archivos/deadpoolprofile.jpg" alt="Imagen de perfil del usuario" class="img-circle img-user">
                          </a>
                      </div>
                      <div class="col-xs-9 col-sm-10 info-user">
                          <h3><a href="perfilDelUsuario.php" title="Perfil del usuario">DeadPool</a></h3>
                          <p><i>2h</i></p>
                      </div>
                  </div>
                  <div class="row">
                      <div class=" col-sm-8 col-sm-offset-2 data-post">
                          <p>Lorem Ipsum Dolor si amet</p>
                          <img src="Archivos/leyendo.jpg" alt="image post" class="img-post">
                          <div class="reaction">
                              <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 1234 <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
                          </div>
                          <div class="comments">
                              <div class="more-comments">Ver mas comentarios</div>
                              <ul>
                                  <li><b>Amigo1</b> Lorem Ipsum Dolor si amet</li>
                                  <li><b>Amigo2</b> Lorem Ipsum Dolor si amet <img draggable="false" class="emoji" alt="😂" src="https://twemoji.maxcdn.com/16x16/1f602.png"></li>
                              </ul>
                              <form>
                                  <input type="text" class="form-control" placeholder="Comentar">
                              </form>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="card-post">
                  <div class="row">
                      <div class="col-xs-3 col-sm-2">
                          <a href="personal-profile.html" title="User Profile">
                              <img src="" alt="Imagen de perfil del usuario" class="img-circle img-user">
                          </a>
                      </div>
                      <div class="col-xs-9 col-sm-10 info-user">
                          <h3><a href="personal-profile.html" title="User Profile"></a></h3>
                          <p><i>2h</i></p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-8 col-sm-offset-2 data-post">
                          <p>Lorem Ipsum Dolor si amet</p>
                          Video here
                          <video controls="">
                            <source src="img/post-video.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                          </video>
                          <div class="reaction">
                              <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 1234 <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
                          </div>
                          <div class="comments">
                              <div class="more-comments">Ver mas comentarios</div>
                              <ul>
                                  <li><b>Amigo1</b> Lorem Ipsum Dolor si amet</li>
                                  <li><b>Amigo2</b> Lorem Ipsum Dolor si amet <img draggable="false" class="emoji" alt="😂" src="https://twemoji.maxcdn.com/16x16/1f602.png"></li>
                              </ul>
                              <form>
                                  <input type="text" class="form-control" placeholder="Comentar">
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
                <!--Esto es un gif que tiene que aparecer antes de seguir cargando posteos-->
          <div id="loading">
              <img src="img/loader.gif" alt="loader">
          </div>
      </div>

@endsection
