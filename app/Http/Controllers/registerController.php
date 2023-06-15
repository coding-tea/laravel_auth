<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|string|email',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->login($user);

        return redirect()->route('home');
    }
}
