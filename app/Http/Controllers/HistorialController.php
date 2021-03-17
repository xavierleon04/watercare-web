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
=======
<<<<<<< HEAD
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
   
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
<<<<<<< HEAD
     */ 
    public function index()
    {
        $historials = Historial::all();
        return view('historial.index', compact('historials'));
=======
     */
    public function index()
    {
        $historials = Historial::all();
        return view('historial', compact('historials'));
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
    }
   
    public function listHistorial(){
        $historials = Historial::all();
<<<<<<< HEAD
        return view('historial.index', compact('historials'));
=======
        return view('historial', compact('historials'));
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
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
<<<<<<< HEAD
        return redirect('historial/index');
=======
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
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
    }
}
