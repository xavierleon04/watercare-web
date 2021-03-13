@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Historial de la bomba</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                
                <th scope="col">Inicio</th>
                <th scope="col">Fin</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($historials as $historial)
                <tr>
                
                <td>{{ $historial->inicio }}</td>
                <td>{{ $historial->fin }}</td>
                <td>

                <form action="{{ action('HistorialController@destroy', $historial->id) }}" method="POST">
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