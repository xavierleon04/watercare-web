@extends('layouts.app')

@section('content')

<<<<<<< HEAD


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
            
=======
<h2> Usuarios</h2>

<form class="needs-validation" novalidate method="POST" action="{{ url('/users/create') }}">
{{ @csrf_field() }}
    <div class="form-row">
        <div class="col-md-8">
            <label for="validationCustom01">Nombre</label>
            <input  id="validationCustom01" name="name" type="text" class="form-control" placeholder="Usuario">
            <div class="valid-feedback">
                OK
            </div>
            <div class="invalid-feedback">
                Ingresa el nombre del Usuario
            </div>
        </div>

        <div class="col-md-8">
            <label for="validationCustom01">Correo electrónico</label>
            <input  id="validationCustom01" name="email" type="text" class="form-control" placeholder="Correo electrónico">
            <div class="valid-feedback">
                OK
            </div>
            <div class="invalid-feedback">
                Ingresa el correo del Usuario
            </div>
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
        </div>

        <div class="col-md-8">
            <label for="validationCustom01">Contraseña</label>
<<<<<<< HEAD
            <h4> {{ $user->password }} </h4>
        </div>

    </div>
    
    <a href="javascript:history.back(-1);" title="Ir la página anterior"  class="btn btn-secondary">Cancelar</a>
=======
            <input  id="validationCustom01" name="password" type="text" class="form-control" placeholder="Contraseña">
            <div class="valid-feedback">
                OK
            </div>
            <div class="invalid-feedback">
                Ingresa la Contraseña del Usuario
            </div>
        </div>

    </div>
    <a href="index" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Agregar Usuario</button>
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c

</form>

@endsection
