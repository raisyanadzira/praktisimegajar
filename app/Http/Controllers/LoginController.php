<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function show()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();
        $hashedPassword= $user->password;

        if(Hash::check($password, $hashedPassword)){
            return "Berhasil Login!";
        }
        else{
            return "Gagal Login!";
        }
        
    }
}
