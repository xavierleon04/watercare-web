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
<<<<<<< HEAD
        $request = $client->get('http://localhost/primer/public/usersApi/index');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }
=======
        $request = $client->get('http://localhost/watercare-web/public/usersApi/index');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    } 
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088

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
<<<<<<< HEAD
        $response = $client->request('POST', 'http://localhost/primer/public/usersApi/store', [
=======
        $response = $client->request('POST', 'http://localhost/watercare-web/public/usersApi/store', [
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
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
<<<<<<< HEAD
        $request = $client->get('http://localhost/primer/public/usersApi/show/'.$id);
=======
        $request = $client->get('http://localhost/watercare-web/public/usersApi/show/'.$id);
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
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
<<<<<<< HEAD
        $response = $client->request('PUT', 'http://localhost/primer/public/usersApi/update/'.$id, [
=======
        $response = $client->request('PUT', 'http://localhost/watercare-web/public/usersApi/update/'.$id, [
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
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
<<<<<<< HEAD
        $response = $client->request('DELETE', 'http://localhost/primer/public/usersApi/destroy/'.$id);
=======
        $response = $client->request('DELETE', 'http://localhost/watercare-web/public/usersApi/destroy/'.$id);
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }
}
