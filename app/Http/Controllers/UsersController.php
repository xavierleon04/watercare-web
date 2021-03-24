<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/api2/usuario');
        $response = $request->getBody()->getContents();        
        $users = json_decode($response);
        return view('users.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('POST', 'http://localhost/api2/usuario/store', [
            'form_params' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        //$message = $json->message;
        //return redirect('users/index')->with('message',$message);
        return redirect('users/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/api2/usuario/'.$id);
        $response = $request->getBody()->getContents();
        $user = json_decode($response);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/api2/usuario/'.$id);
        $response = $request->getBody()->getContents();
        $user = json_decode($response);
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('PUT', 'http://localhost/api2/usuario/update/'.$id, [
            'form_params' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        //$message = $json->message;
        //return redirect('users/index')->with('message',$message);
        return redirect('users/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* $user = User::find($id);
        $user->delete();
        return redirect('users/index'); */


        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('DELETE', 'http://localhost/api2/usuario/destroy/'.$id);
        $response = $response->getBody()->getContents();
        $json = json_decode($response);
        //$message = $json->message;
        //return redirect('users/index')->with('message',$message);
        return redirect('users/index');

    }    
}   
