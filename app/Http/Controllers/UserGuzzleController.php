<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserGuzzleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/primer/public/usersApi/index');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $response = $client->request('POST', 'http://localhost/primer/public/usersApi/store', [
            'form_params' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
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
        $request = $client->get('http://localhost/primer/public/usersApi/show/'.$id);
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $response = $client->request('PUT', 'http://localhost/primer/public/usersApi/update/'.$id, [
            'form_params' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
        ]);
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $response = $client->request('DELETE', 'http://localhost/primer/public/usersApi/destroy/'.$id);
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }
}
