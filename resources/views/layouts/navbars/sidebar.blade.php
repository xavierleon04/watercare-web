<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('Water Care') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
<<<<<<< HEAD
          <i><img style="width:25px" src="{{ asset('img/w.svg') }}"></i>
=======
<<<<<<< HEAD
          <i><img style="width:25px" src="{{ asset('img/w.svg') }}"></i>
=======
<<<<<<< HEAD
          <i><img style="width:25px" src="{{ asset('img/w.svg') }}"></i>
=======
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
          <p>{{ __('Administración') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="profile">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('Perfil Usuario') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="users/index">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('Gestión de usuarios') }} </span>
              </a>
            </li>
          </ul> 
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="chart">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Consumo de agua') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
<<<<<<< HEAD
        <a class="nav-link" href="historial/index">
          <i class="material-icons">library_books</i>
            <p>{{ __('Gestión de Historial') }}</p>
=======
<<<<<<< HEAD
        <a class="nav-link" href="historial/index">
          <i class="material-icons">library_books</i>
            <p>{{ __('Gestión de Historial') }}</p>
=======
        <a class="nav-link" href="historial">
          <i class="material-icons">library_books</i>
            <p>{{ __('Gestión de Historial') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Mapas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notificaciones') }}</p>
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="help">
          <i class="material-icons">language</i>
          <p>{{ __('Ayuda') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>
