<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historial;

class HistorialController extends Controller
{
    public function listHistorial(){
        $historial = Historial::all();
        return view('historial', compact('historial'));
    }
}
