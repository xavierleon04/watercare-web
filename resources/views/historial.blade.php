@extends('layouts.app')

@section('content')

    <div class="container">
        <h3>Historial de la bomba</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Inicio</th>
                <th scope="col">Fin</th>
                </tr>
            </thead>
            <tbody>
            @foreach($historial as $historial)
                <tr>
                <th scope="row">{{$loop->index}}</th>
                <td>{{ $historial->inicio }}</td>
                <td>{{ $historial->fin }}</td>
                
                </tr>
            @endforeach
               
            </tbody>
            </table>

        
    </div>

@endsection