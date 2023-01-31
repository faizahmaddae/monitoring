<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\UserStoreRequest;
use App\Models\User;
use App\Models\Client;

class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index(){
        $users = User::paginate();

        // add client to user
        foreach ($users as $user) {
            if($user->client_id){
                $user->client = Client::find($user->client_id);
            }
        }
        // print_r($users);
        return view('users.index', compact('users'));
    }

    // create
    public function create(){
        // get clients
        $clients = Client::all();
        return view('users.create', compact('clients'));
    }


    public function edit(User $user){

        // add client to user
        if($user->client_id){
            $user->client = Client::find($user->client_id);
        }
        // get clients
        $clients = Client::all();

        return view('users.edit', compact('user', 'clients'));
    }

    // store
    public function store(UserStoreRequest $request){
        
        $request->validated($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        
        return redirect()->route('users.index');
    }

    // update
    public function update(User $user){

        $user->update(request()->all());
        return redirect()->route('users.index');
    }

    // delete
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('users.index');
    }

    
}
