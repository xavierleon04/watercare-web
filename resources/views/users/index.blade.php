@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Gestión de Usuarios</h3>

        <a href="create" class="btn btn-success">CREAR</a>
        
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo electrónico</th>
                <!-- <th scope="col">Contraseña</th> -->
                <th scope="col" colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                <th scope="row">{{$loop->index}}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <!-- <td>${{ $user->password }}</td> -->
                <td> 
                    <button class="btn btn-warning" onclick="location.href='{{ url('users/show/'.$user->id) }}'"> Ver </button>
                </td>
                <td>
                    <button class="btn btn-primary" onclick="location.href='{{ url('users/edit/'.$user->id) }}'">Editar </button>
                </td>
                <td>

                <form action="{{ action('UsersController@destroy', $user->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ @csrf_field() }}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro de eliminar?')"> Eliminar </button>
                </form> 

                </td>
                </tr>
            @endforeach
               
            </tbody>
            </table>

        
    </div>

@endsection