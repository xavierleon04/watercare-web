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
<<<<<<< HEAD
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/api2/usuario');
        $response = $request->getBody()->getContents();        
        $users = json_decode($response);
        return view('users.index', compact('users'));
    }

=======
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function listUsers(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088

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
<<<<<<< HEAD
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
=======
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        $users = User::all();
        return view('users.index', compact('users'));
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/api2/usuario/'.$id);
        $response = $request->getBody()->getContents();
        $user = json_decode($response);
=======
<<<<<<< HEAD
        $user = User::find($id);
=======
<<<<<<< HEAD
        $user = User::find($id);
=======
<<<<<<< HEAD
        $user = User::find($id);
=======
        $user = User::findOrFail($id);
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
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
<<<<<<< HEAD
        $client = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://localhost/api2/usuario/'.$id);
        $response = $request->getBody()->getContents();
        $user = json_decode($response);
        return view('users.edit', compact('user'));
=======
        $user = User::find($id);
         return view('users.edit', compact('user'));
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
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
<<<<<<< HEAD
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
=======
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();

>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
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
<<<<<<< HEAD
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
=======
        $user = User::find($id);
        $user->delete();
        return redirect('users/index');
<<<<<<< HEAD
    }    
}   
=======
<<<<<<< HEAD
    }    
}   
=======
<<<<<<< HEAD
    }    
}   
=======
    }
}
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c
>>>>>>> 24cccf4d2b0f7e22e2503533d26ff40b413382d3
>>>>>>> 41694a7b02ce6afed4561b407b7b0f2461b94654
>>>>>>> a3ed98772b3001447398fe6cc84551fc518e6088
