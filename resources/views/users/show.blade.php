@extends('layouts.app')

@section('content')

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
        </div>

        <div class="col-md-8">
            <label for="validationCustom01">Contraseña</label>
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

</form>

@endsection
