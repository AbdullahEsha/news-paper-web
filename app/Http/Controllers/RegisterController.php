<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $req)
    {
        // Validate the request data
        $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($req->password !== $req->password_confirmation) {
            return redirect('/register')->with('error', 'Password and confirm password do not match!');
        }

        try {
            // Create a new user
            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->phone = $validatedData['phone'];
            $user->userType = "user";
            $user->password = Hash::make($validatedData['password']);

            $user->save();

            // Redirect with success message
            return redirect('/login')->with('success', 'User was successfully registered!');
        } catch (\Exception $e) {
            // Redirect with error message
            return redirect('/register')->with('error', $e->getMessage());
        }
    }
}
