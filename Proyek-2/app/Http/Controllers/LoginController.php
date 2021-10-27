<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function cek(Request $request)
    {
        $request->email;
        $request->password;

        $login = User::where([
            'email'=>$request->email,
            'password'=>$request->password,
        ])->first();

        if ($login) {

            Session::put('email', $login->email);
            Session::put('password', $login->password);

            return redirect("/template");

        } else {
            return redirect()->back();
        }

    }
}
