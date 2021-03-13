@extends('layouts.app')

@section('content')

<h2>Editar usuario</h2>
<form class="needs-validation" novalidate method="POST" action="{{ action('UsersController@update', $user->id) }}">
{{ method_field('PUT') }}
{{ @csrf_field() }}
    
<div class="form-row">
        <div class="col-md-8">
            <label for="validationCustom01">Nombre</label>
            <input  id="validationCustom01" name="name" type="text" class="form-control" placeholder="Usuario"  value="{{ $user->name }}">
           
        </div>

        <div class="col-md-8">
            <label for="validationCustom01">Correo electrónico</label>
            <input  id="validationCustom01" name="email" type="text" class="form-control" placeholder="Usuario"  value="{{ $user->email }}">
           
        </div>

        <div class="col-md-8">
            <label for="validationCustom01">Contraseña</label>
            <input  id="validationCustom01" name="password" type="text" class="form-control" placeholder="Usuario"  value="{{ $user->password }}">
            
        </div>

    </div>
    <a href="index" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-success">Editar usuario</button>

</form>

@endsection