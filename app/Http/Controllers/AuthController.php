<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $req) {
        return redirect()->route('home.index');
    }
}
