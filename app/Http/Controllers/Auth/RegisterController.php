<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
    ]);
    $name= $request->input('name');
    $email= $request->input('email');
    $password= $request->input('password');
    $user = User::create([
        'name' => $name,
        'email' => $email,
        'password' => $password,
    ]);

    return response()->json([
        'message' => 'User created successfully',
        'user' => $user,
    ]);
    }
}
