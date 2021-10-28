<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index()
    {
        Session::flush();
        return redirect("/login");
    }
}
