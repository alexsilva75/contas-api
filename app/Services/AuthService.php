<?php namespace App\Services;

use Illuminate\Support\Facades\Hash; 
 

use App\Models\User; 

class AuthService{

    public function register(array $data): ?User{
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function login(array $data): User{
        $user = User::where('email', $data['email'])->first();
        
        if ($user && Hash::check($data['password'], $user->password)) {
            return $user;
        }
        return null; 
    } 

}

