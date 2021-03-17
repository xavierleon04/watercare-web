@extends('layouts.app')

<<<<<<< HEAD
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
    <h3 style="text-align:center; margin:20px">Sistema y Seguridad</h3>  
    <br />
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Sistema. <span class="text-muted"></span></h2>
            <p class="lead">Sonido, notificaciones, RAM que utiliza la aplicación.  </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('img/sistema.png')}}" alt="Generic placeholder image"  width="140" height="140">
          </div>
        </div>

        
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Privacidad. <span class="text-muted"></span></h2>
            <p class="lead">Locación, datos sensibles como datos del usuario, historiales, entre otros.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('img/priv.png')}}" align="center" alt="Generic placeholder image" width="140" height="140" >
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Copias de seguridad <span class="text-muted"></span></h2>
            <p class="lead">Las copias de seguridad, si se hacen con regularidad, te permiten mantener a salvo tus fotos, documentos y programas instalados. <br /> Así, un eventual fallo del disco duro o el ataque de un virus arrollador no te atrpará desprevenido y te será muy fácil recuperar todos tus archivos y los valores de configuración previos al desastre informático. Realiza una copia de tus historiales en tu pc, preferentemente en el disco duro.
            <br /><br />  Una vez seleccionado el lugar donde se guardaran los datos, simplemente de <a href="#">Click aquí</a> y sus datos seran descargados listos para moverse al lugar de almacenamiento que usted desee.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{asset('img/copy.png')}}" alt="Generic placeholder image" width="140" height="140" padding="50px" >
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


=======
@section('content')
<html>
  <head>
  <title>Water Care</title>
  </head>
  <body>
<<<<<<< HEAD
  <h2 style="text-align:center; margin:20px">Sistema y Seguridad</h2>
=======
  <h3 style="text-align:center; margin:20px">Sistema y Seguridad</h3>
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3

  
    
    
    <h4 style="text-align:left; margin:20px; padding:10px">
        Las copias de seguridad, si se hacen con regularidad, te permiten mantener a salvo tus fotos, documentos y programas instalados.<br />

        Así, un eventual fallo del disco duro o el ataque de un virus arrollador no te pillará desprevenido y te será muy fácil recuperar <br /> todos tus archivos y los valores de configuración previos al desastre informático.<br />

        ¿Qué es una copia de seguridad? ¿Qué tipos de copia de seguridad existen?<br />
        Una copia de seguridad -también conocida como copia de respaldo, copia de reserva o backup, en inglés- <br />
        Es el proceso de guardar los datos originales de un dispositivo para poder recuperarlos de nuevo en caso de pérdida.<br />

        <br />Existen dos tipos principales de copias de seguridad:<br />

        <ul>
            <li>Copia de seguridad de los archivos.</li>
            <li>Copia de seguridad del sistema.</li>
        </ul>
        <br />

        <h3 style = "margin:20px">Copia de seguridad</h3>
        <h4 style="text-align:left; margin:20px; padding:10px">Realiza una copia de tus historiales en tu pc, preferentemente en el disco duro.<br />
        Una vez seleccionado el lugar donde se guardaran los datos, simplemente de <a href="#">Click aquí</a> y sus datos seran descargados listos para moverse al lugar de almacenamiento que usted desee.
     </h4>
     <img src="{{asset('img/data.jpg')}}" style = "width:450px; align:right;margin:20px; padding:10px">
</body>
</html>
@endsection
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
