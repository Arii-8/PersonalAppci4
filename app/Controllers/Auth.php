<?php 

namespace App\Controllers;
use Config\Myth\Auth\Auth as AuthConfig;

class Auth extends BaseController {
    // method login (index)
    public function index(){
        $data = [
            'config' => config('auth')
        ];
    
        // Login
        return view('auth/login', $data);
    }

    // method register
    public function register(){

        // Register
        return view('auth/register');
    }
}