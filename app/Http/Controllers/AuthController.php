<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

use App\Http\Requests\UserRegisterRequest;
use App\Services\AuthService; 
use App\Http\Requests\LoginRequest; 

class AuthController extends Controller
{
    //
    public function __construct(private AuthService $authService){

    }

    public function register(UserRegisterRequest $request)
    {
        $user = $this->authService->register($request->validated());
        return response()->json(['message' => 'User registered successfully', 'data' => $user], 201);
    }

    public function login(LoginRequest $request){
        $userData = $request->validated();
        $user = $this->authService->login($userData);

        if(!$user){
            return response()->json(
                [
                    'message' => 'Invalid credentials',
                    'status' => 401,
                ], 401);
        }

        $expiresAt = now()->addMinutes(
            config('sanctum:expiration')
        ); // Token expires in 60 minutes
                    
        return response()
            ->json(['user' => $user, 
                'token' => $user->createToken('api_token')->plainTextToken,
                'expires_at' => $expiresAt->timestamp * 1000,
                ], 200);
        

    }
}
