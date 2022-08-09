<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // public function register(Request $request) {
    //     $credentials = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|min:8',
    //     ]);

    //     $user = User::create([
    //         'name' => $credentials['name'],
    //         'email' => $credentials['email'],
    //         'password' => bcrypt($credentials['password'])
    //     ]);

    //     return response([
    //         'auth' => $user,
    //         'token' => $user->createToken('pelatihan')->plainTextToken
    //     ], 200);
    // }

    // public function login(Request $request) {
    //     $credentials = $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required'
    //     ]);

    //     $user = User::where(['email' => $credentials['email']])->first();

    //     if(!Auth::attempt($credentials)) {
    //         return response([
    //             'message' => 'Invalid credentials'
    //         ]);
    //     } else {
    //         return response([
    //             'auth' => auth()->user(),
    //             'token' => auth()->user()->createToken('Pelatihan')->plainTextToken
    //         ], 200); 
    //     }
    // }

    // public function userProfile() {
    //     return response([
    //         "auth" => auth()->user(),
    //     ], 200);
    // }

    // public function logout() {
    //     auth()->user()->tokens()->delete();

    //     return response([
    //         'message' => "You're logged out!"
    //     ]);
    // }
}