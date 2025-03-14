<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function verify(Request $req)
    {
        $user = User::where('email', $req->email)->orWhere('phone', $req->email)->first();

        if ($user) {
            if (Hash::check($req->password, $user->password)) {
                $req->session()->put('name', $user->name);
                $req->session()->put('type', $user->userType);

                if ($req->session()->get('type') == 'admin') {
                    return redirect('/');
                } else {
                    $req->session(['error', 'Invalid username or password']);
                    return redirect('/login');
                }
            } else {
                $req->session(['error', 'Invalid username or password']);
                return redirect('/login');
            }
        } else {
            $req->session(['error', 'Invalid username or password']);
            return redirect('/login');
        }
    }
}
