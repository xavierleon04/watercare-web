<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Historial;

class HistorialController extends Controller
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
   
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    public function listHistorial(){
        $historial = Historial::all();
        return view('historial', compact('historial'));
>>>>>>> 4db9cb428566562a9eb180ff8d85f531e4179cad
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
    }
}
