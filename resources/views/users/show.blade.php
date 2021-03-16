@extends('layouts.app')

@section('content')



<h2 style="padding:20px"> Usuarios</h2>

<form class="needs-validation" novalidate method="POST" action="{{ action('UsersController@show', $user->id) }}">
{{ method_field('GET') }}
{{ @csrf_field() }}
    <div class="form-row">
        <div class="col-md-8">
            <label for="validationCustom01">Nombre</label>  
            <h4> {{ $user->name }} </h4>
            
        </div>  

        <div class="col-md-8">
            <label for="validationCustom01">Correo electrónico</label>
            <h4> {{ $user->email }} </h4>
            
        </div>

        <div class="col-md-8">
            <label for="validationCustom01">Contraseña</label>
            <h4> {{ $user->password }} </h4>
        </div>

    </div>
    
    <a href="javascript:history.back(-1);" title="Ir la página anterior"  class="btn btn-secondary">Cancelar</a>

</form>

@endsection
