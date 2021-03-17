@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Water Care</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="../web-bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <main role="main">
    <br />
    <h3 style="text-align:center; margin:20px">Configuración general de la cuenta</h3>  
    <br />
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('img/uss.png')}}" alt="Generic placeholder image" width="140" height="140">
            <h2 style>Acceso de cuenta</h2>
            <p>Tus cuentas, correos electrónicos, trabajo, familia.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Leer más &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('img/idiom.png')}}" alt="Generic placeholder image" width="140" height="140">
            <h2>Idioma</h2>
            <p>Idioma, Hora, Región, Fecha.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Leer más &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="{{asset('img/personaliz.png')}}" alt="Generic placeholder image" width="200" height="140">
            <h2>Personalizar</h2>
            <p> Fondo, colores, pantalla.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Leer más &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Ajustes. <span class="text-muted"></span></h2>
            <p class="lead">Estas opciones generalmente son cargadas en su inicio y en algunos casos se deberá reiniciar para poder ver los cambios, ya que el programa no podrá cargarlos mientras se esté ejecutando, si la configuración aún no ha sido definida por el usuario (personalizada), el programa o sistema cargará la configuración predeterminada.</p>
          </div>
        
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        
        <p>&copy; Creada <i class="material-icons"></i> por
      <a href="#" target="_blank">Technology Force</a>  &middot; </p>
      </footer>
    </main>
 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../web-bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>

@endsection


