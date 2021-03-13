<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historial;

class HistorialController extends Controller
{
<<<<<<< HEAD
   
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historials = Historial::all();
        return view('historial', compact('historials'));
    }
   
    public function listHistorial(){
        $historials = Historial::all();
        return view('historial', compact('historials'));
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
        $historials = Historial::all();
        return view('historial', compact('historials'));
=======
    public function listHistorial(){
        $historial = Historial::all();
        return view('historial', compact('historial'));
>>>>>>> 4db9cb428566562a9eb180ff8d85f531e4179cad
    }
}
