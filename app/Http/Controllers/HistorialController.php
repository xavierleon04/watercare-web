<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historial;

class HistorialController extends Controller
{
   
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $historials = Historial::all();
        return view('historial.index', compact('historials'));
    }
   
    public function listHistorial(){
        $historials = Historial::all();
        return view('historial.index', compact('historials'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $historial = Historial::find($id);
        $historial->delete();
        return redirect('historial/index');
    }
}
