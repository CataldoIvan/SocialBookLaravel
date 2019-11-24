<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>@yield('titulo')</title>
    <!-- **** css nuestro !-->
    <link rel="stylesheet" href="/css/stylehome.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- **** carga la tipografia de goggle fonts !-->
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- **** se incluye el codigo de las animaciones para  form !-->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- **** FONTAWESOME !-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>

    <div class="container-fluid">

      <header>
        <nav class="navbar navbar-expand-lg w-100">

        <a href="home">
        <img src="/img/logo1.png" class="logo" alt="Logo Libro">
        </a>
              <button class="navbar-toggler navbar-dark bg-dark"  style="border:ridge;" type="button" data-toggle="collapse" data-target="#uno">
                <span class="navbar-toggler-icon"></span>
              </button>

          <div class="collapse navbar-collapse  justify-content-end offset-lg-3 offset-md-1 offset-xl-5"  id="uno">
              <ul class="navbar-nav w-md-100 text-left my-3">
                  <li class="nav-item py-3 ml-3 align-content-end" ><span class="border-bottom"><a href="home" class="navbar-link" style="">HOME</a></span></li>
                  <li class="nav-item  py-3 ml-3 align-content-end"><span class="border-bottom"><a href="faq" class="navbar-link">FAQ</a></span></li>
                  <li class="nav-item  py-3 ml-3 align-content-end"><span class="border-bottom"><a href="registracion" class="navbar-link">REGISTRACION</a></span></li>
                  <li class="nav-item  py-3 mx-3 align-content-end"><span class="border-bottom"><a href="login" class="navbar-link">LOGIN</a></span></li>
              </ul>
          </div>
        </nav>
      </header>

      <section>
        @yield("principal")
      </section>



      <footer class="m-0 py-3 ">
	       <div class="w-100  m-0 text-center text-white" id="copyright">Copyright&copy; 2019 - Página creada por Brenda, Gaston e Ivan - Todos los derechos reservados</div>
	    </footer>

        <!-- **** SCRIPTS y JQUERY *** !-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- ***** CONFIGURACION DE LAS ANIMACIONES  CON JS Y SCROLLREVEAL *** !-->
        <script >

        window.sr = ScrollReveal();
        sr.reveal('.navbar',{
          duration: 1000,
          origin:'top',
          distance:"100px",
        });

        sr.reveal('.jumbotron',{
          duration: 2000,
          origin:'left',
          distance:"100px"
        });

        sr.reveal('footer',{
          duration: 1000,
          origin:'left',
        });

        sr.reveal('.row',{
          duration:2000,
          distance:"100px"
        });

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

     </div>
   </body>
</html>
