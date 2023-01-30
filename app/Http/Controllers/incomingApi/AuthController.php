<?php

namespace App\Http\Controllers\incomingApi;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth_request\LoginUserRequest;
use App\Http\Requests\auth_request\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller{
    
    use HttpResponses;
    
    public function login(LoginUserRequest $request)
    {
        $request->validated($request->all());

        if(!auth()->attempt($request->only('email', 'password'))) {
            return $this->error('','Invalid credentials', 401);
        }

        $user = User::where('email', $request->email)->first();
    
        return $this->success([
            'user' => $user,
            'token' => $user->createToken('auth_token')->plainTextToken,
        ], 'User logged in successfully');
    }


    
    public function register(StoreUserRequest $request)
    {
        $request->validated($request->all());

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // if role is not null update user
        if ($request->role) {
            $user->role = $request->role;
            $user->save();
        }
        
        // if client_id is not null update user
        if ($request->client_id) {
            $user->client_id = $request->client_id;
            $user->save();
        }

        return $this->success([
            'message' => 'User created successfully',
            'user' => $user,
            'token' => $user->createToken('auth_token')->plainTextToken,
        ]);

    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return $this->success([
            'message' => 'User logged out successfully',
        ]);
    }
}
