<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="#">{{ $titlePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <form class="navbar-form">
        <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Buscar...">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="material-icons">dashboard</i>
            <p class="d-lg-none d-md-block">
              {{ __('Stats') }}
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">notifications</i>
            <span class="notification">5</span>
            <p class="d-lg-none d-md-block">
              {{ __('Some Actions') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">{{ __('Mike John respondió tu email') }}</a>
            <a class="dropdown-item" href="#">{{ __('Tienes 5 tareas nuevas') }}</a>
            <a class="dropdown-item" href="#">{{ __('Lore ha modificado el horario') }}</a>
            <a class="dropdown-item" href="#">{{ __('Otra Notificaficación') }}</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="material-icons">person</i>
            <p class="d-lg-none d-md-block">
              {{ __('Account') }}
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
<<<<<<< HEAD
            <a class="dropdown-item" href="profile">{{ __('Perfil') }}</a>
=======
<<<<<<< HEAD
            <a class="dropdown-item" href="profile">{{ __('Perfil') }}</a>
=======
            <a class="dropdown-item" href="#">{{ __('Perfil') }}</a>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
            <a class="dropdown-item" href="ajustes">{{ __('Ajustes') }}</a>
            <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesión') }}</a> 
        
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
            <a class="dropdown-item" href="#">{{ __('Ajustes') }}</a>
            <div class="dropdown-divider"></div>
<<<<<<< HEAD
           <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesión') }}</a> 
        
=======
<<<<<<< HEAD
           <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Cerrar Sesión') }}</a> 
        
=======
            <a class="dropdown-item" href="{{ route('login') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Cerrar Sesión') }}</a>
>>>>>>> ffcdfd53412dff87aa5af6f17ee1a48ce3a66b74
>>>>>>> 4db9cb428566562a9eb180ff8d85f531e4179cad
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
