
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Water Care</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0px;
                padding: 5px 100px;

<<<<<<< HEAD
                background-image: url('img/v5.jpeg'); 
=======
<<<<<<< HEAD
                background-image: url('img/v5.jpeg'); 
=======
                background-image: url('img/v4.jpg'); 
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center center;
                background-size: cover;

            }
            

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #imagen{
                width: auto;
                height: 450px;
                margin: 10px auto;
                background: url(asset{{('img/login.jpeg')}}");

            }
        </style>
    </head>
    <body>
    
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar Sesión</a>
                        <a href="{{ route('register') }}">Regístrate</a>
                    @endauth
                </div>
            @endif

         <div class="content">
            <h1>Water Care</h1>
            <br />
            <h2> Cuidando el agua de hoy para que también sea el agua del futuro </h2>
            <br />
         <div id="carouselExampleIndicators" class="carousel slide mx-auto d-block w-75" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="{{asset('img/agua4.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{asset('img/agua6.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{asset('img/agua3.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

            </div>
            <div id="imagen">
             </div>
        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>

    <footer class="footer">
    <div class="content">
    <nav class="float-left">
      <ul>
        <li>
          <a href="https://www.facebook.com/?stype=lo&jlou=Afeq7ixrsyLSw5U6CjzrA-lEjVqBmSJm6NckBDTXMNbwZhueV9Hg1BX3foW0Rb8wvw_5_B4KSTTTIsZ11qxwxEs2Rbap2nLTQd0Xw7MJyQ4B4g&smuh=34575&lh=Ac-1Dq6CmdF-mpGcWYo">
              {{ __('Facebook') }}
          </a>
        </li>
        <li>
          <a href="https://twitter.com/home?lang=es">
              {{ __('Twitter') }}
          </a>
        </li>
        <li>
          <a href="https://www.creative-tim.com/license">
              {{ __('Licencias') }}
          </a>
        </li>
      </ul>
    </nav>

    
    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>,<b> Creada <i class="material-icons"></i> por
      Technology Force</b>
    </div>
</div>
  
</footer>
</html>
